# Created Database Seeders from a json file
# Json file must have all information about the country or territory
# Use covert script first!

from os.path import exists
import json

path = 'E:\Programming\workspaces\personal\wordle\scripts\countries.json'
if not exists(path):
    print('Can\'t find countries.json file at path: ' + path)
    quit()

countriesFile = open(path, 'r')
countriesJson = countriesFile.read()
countriesFile.close()

jsonArray = json.loads(countriesJson)

seedText = '<?php\n\nnamespace Database\Seeders\Countries;\n\nuse Illuminate\Database\Seeder;\nuse Illuminate\Support\Facades\DB;\nuse Carbon\Carbon;\n\nclass {}_CtrySeeder extends Seeder\n{{\n\t/**\n\t * Run the database seeds.\n\t *\n\t * @return void\n\t */\n\tpublic function run()\n\t{{\n\t\tDB::table(\'countries\')->insert([\n\t\t\t\'name\'  => \'{}\',\n\t\t\t\'code\'  => \'{}\',\n\t\t\t\'type\'  => null,\n\t\t\t\'paths\' => serialize(\n\t\t\t\t{}\n\t\t\t),\n\t\t\t\'location\' => DB::raw(\'POINT({}, {})\'),\n\t\t\t\'created_at\' => Carbon::now()->format(\'Y-m-d H:i:s\'),\n\t\t\t\'updated_at\' => Carbon::now()->format(\'Y-m-d H:i:s\')\n\t\t]);\n\t}}\n}}'
callText = '\Database\Seeders\Countries\{}_CtrySeeder::class,'
callStr = ''
count = 0
print('Generating seeders from countries.json')
for obj in jsonArray:
    code = str(obj['country']).upper()

    if exists('database/seeders/countries/' + code + '_CtrySeeder.php'):
        continue
    if 'svg_paths' not in obj:
        continue

    toWrite = seedText.format(code, str(obj['name']), code, str(obj['svg_paths']), str(obj['latitude']), str(obj['longitude']))
    count = count + 1
    
    file = open('database/seeders/countries/' + code + '_CtrySeeder.php', 'w')
    file.write(toWrite)
    file.close()

    callStr = callStr + callText.format(code) + '\n'

print('Created ' + str(count) + ' seed files')
print(callStr)
