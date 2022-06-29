# A script that takes svgs as input, and converts to array of strings with path in each element
# Then writes to countries.json file
# Countries.json file must have json array of country data first, from https://developers.google.com/public-data/docs/canonical/countries_csv

from urllib.request import urlopen  # the lib that handles the url stuff
from svgpathtools import svg2paths
from os.path import exists
import json

def getPath(code, codes, arr):
    for x in range(0, len(arr)):
        if str(codes[x]).upper() == str(code).upper():
            return arr[x]
    return None

target_url = "https://raw.githubusercontent.com/djaiss/mapsicon/master/all/"
codes = ('ad', 'ae', 'af', 'ag', 'ai', 'al', 'am', 'ao', 'aq', 'ar', 'as', 'at', 'au', 'aw', 'ax', 'az', 'ba', 'bb', 'bd', 'be', 'bf', 'bg', 'bh', 'bi', 'bj', 'bl', 'bm', 'bn', 'bo', 'bq', 'br', 'bs', 'bt', 'bv', 'bw', 'by', 'bz', 'ca', 'cc', 'cd', 'cf', 'cg', 'ch', 'ci', 'ck', 'cl', 'cm', 'cn', 'co', 'cr', 'cu', 'cv', 'cw', 'cx', 'cy', 'cz', 'de', 'dj', 'dk', 'dm', 'do', 'dz', 'ec', 'ee', 'eg', 'eh', 'er', 'es', 'et', 'fi', 'fj', 'fk', 'fo', 'fr', 'ga', 'gb', 'gd', 'ge', 'gf', 'gg', 'gh', 'gi', 'gl', 'gm', 'gn', 'gp', 'gq', 'gr', 'gs', 'gt', 'gu', 'gw', 'gy', 'hk', 'hm', 'hn', 'hr', 'ht', 'hu', 'id', 'ie', 'il', 'im', 'in', 'io', 'io', 'iq', 'ir', 'is', 'it', 'jm', 'jo', 'jp', 'ke', 'kg', 'kh', 'ki', 'km', 'kn', 'kp', 'kr', 'kw', 'ky', 'kz', 'la', 'lb', 'lc', 'li', 'lk', 'lr', 'ls', 'lt', 'lu', 'lv', 'ly', 'ma', 'mc', 'md', 'me', 'mf', 'mg', 'mk', 'ml', 'mm', 'mn', 'mo', 'mq', 'mr', 'ms', 'mt', 'mu', 'mv', 'mw', 'mx', 'my', 'mz', 'na', 'nc', 'ne', 'nf', 'ng', 'ni', 'nl', 'no', 'np', 'nr', 'nu', 'nz', 'om', 'pa', 'pe', 'pf', 'pg', 'ph', 'pk', 'pl', 'pm', 'pn', 'pr', 'pt', 'pw', 'py', 'qa', 're', 'ro', 'rs', 'ru', 'rw', 'sa', 'sb', 'sc', 'sd', 'se', 'sg', 'sh', 'si', 'sj', 'sk', 'sl', 'sm', 'sn', 'so', 'sr', 'ss', 'st', 'sv', 'sx', 'sy', 'sz', 'tc', 'td', 'tf', 'tg', 'th', 'tj', 'tk', 'tl', 'tm', 'tn', 'to', 'tr', 'tt', 'tw', 'tz', 'ua', 'ug', 'us', 'uy', 'uz', 'va', 'vc', 've', 'vg', 'vi', 'vn', 'vu', 'wf', 'ws', 'ye', 'yt', 'za', 'zm', 'zw')
arr = []

print('Fetching from repo')
for code in codes:
    if not code:
        continue
    url = target_url + code + "/vector.svg"
    try: 
        data = urlopen(url).read().decode('utf-8')
    except:
        print('couldn\'t find ' + url + ' skipping!' )
        continue
    file = open('test.svg', 'w')
    file.write(data)
    file.close()
    paths, attributes = svg2paths('test.svg')
    d = []
    for attr in attributes:
        d.append(attr['d'])
    arr.append(d)

print('Done fetching from repo. Writing svg_path array to countries.json file for each country code')

jsonPath = 'E:\Programming\workspaces\personal\wordle\scripts\countries.json'
if not exists(jsonPath):
    print('cant find countries.json file')
    quit()

jsonFile = open(jsonPath, 'r')
countriesJson = jsonFile.read()
jsonFile.close()
jsonObj = json.loads(countriesJson)

for obj in jsonObj:
    path = getPath(obj['country'], codes, arr)
    if path == None:
        print('can\'t find paths for code ' + obj['country'])
        continue
    obj['svg_paths'] = path

print('Done adding svg_paths to each json object, writing to file')

#write to json file
filePath = 'E:\Programming\workspaces\personal\wordle\scripts\countries.json'
jsonStr = json.dumps(jsonObj, indent=4)
file = open(filePath, 'w')
file.write(jsonStr)
file.close()

print('Done. Data is in ' + filePath)