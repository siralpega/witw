<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AT_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Austria',
			'code'  => 'AT',
			'type'  => null,
			'paths' => serialize(
				['M874.109375,402.498047 L872.128906,389.755859 L851.125,367.382813 L847.662109,348.695313 L852.365234,346.583984 L863.275391,337.564453 L873.441406,332.230469 L878.035156,318.228516 L890.277344,316.617187 L900.667969,312.042969 L913.892578,297.335938 L942.544922,288.927734 L950.101563,282 L978.179688,280.519531 L998.775391,267.798828 L1012.74023,252.351563 L1022.87305,225.533203 L1022.87305,212.791016 L1024.72461,198.585938 L1023.24219,182.378906 L1040.17188,171.507812 L1054.2832,177.210938 L1066.52734,179.693359 L1072.10156,184.767578 L1079.26953,192.806641 L1090.90039,196.269531 L1098.32617,182.044922 L1105.38281,179.564453 L1111.07031,174.619141 L1113.05078,164.339844 L1119.34766,157.912109 L1116.25586,131.259766 L1119.71875,127.166016 L1112.18164,119 L1121.8125,103.181641 L1139.01758,107.644531 L1151.37109,115.554688 L1161.50195,122.351563 L1164.9668,128.408203 L1171.15234,137.556641 L1166.74414,153.015625 L1181.13477,164.802734 L1220.94727,165.802734 L1252.98633,180.603516 L1264.77344,167.53125 L1273.06445,168.052734 L1280.87891,145.695312 L1294.16602,152.425781 L1305.04297,157.419922 L1317.63477,152.404297 L1322.99609,157.091797 L1330.63672,158.134766 L1335.8457,168.337891 L1343.22852,167.337891 L1344.76953,128.068359 L1348.375,118.927734 L1365.84961,111.287109 L1374.18359,91.1875 L1404.83398,95.1816406 L1405.20312,67.3417969 L1414.86328,42.2675781 L1408.98047,16.6113281 L1416.96875,0.89453125 L1452.24414,4.13085938 L1453.80664,15.8808594 L1458.64648,26.6464844 L1473.53906,22.1328125 L1483.33203,22.1328125 L1488.51953,6.046875 L1492.27734,11.1933594 L1504.7168,10.6933594 L1522.43359,21.5898438 L1537.7832,21.0703125 L1544.68555,31.4453125 L1562.35547,39.4121094 L1576.91992,41.1484375 L1587.12305,54.4765625 L1611.52344,55.8652344 L1617.96875,47.2460937 L1629.53906,49.484375 L1692.92187,95.5253906 L1749.87695,95.6347656 L1762.48828,94.09375 L1778.38086,90.2734375 L1783.24219,68.8261719 L1798.28516,69.1738281 L1804.99414,66.7421875 L1827.5957,78.0078125 L1837.27734,76.4042969 L1845.22266,83.9394531 L1846.08984,91.515625 L1858.05078,91.515625 L1870.12109,95.6621094 L1884.88086,95.1425781 L1898.16797,97.3984375 L1904.39648,107.775391 L1912.21094,140.314453 L1915.85742,156.574219 L1916.20508,163.935547 L1903.24414,181.347656 L1895.08398,195.740234 L1892.30469,206.441406 L1892.82617,215.625 L1891.80469,226 L1894.92969,234.140625 L1906.45898,247.080078 L1910.10547,259.539062 L1920.30859,268.201172 L1921.85156,278.882812 L1926.71289,293.621094 L1928.9707,305.019531 L1938.30078,309.257812 L1953.19336,322.933594 L1960.8125,332.880859 L1960.8125,343.736328 L1961.50586,358.953125 L1976.55078,360.167969 L1979.63281,369.113281 L1969.73633,380.378906 L1968.69531,386.587891 L1965.04883,401.347656 L1965.91602,412.050781 L1957.4707,419.107422 L1950.24023,422.732422 L1955.60156,433.935547 L1958.72852,442.576172 L1958.18555,449.804687 L1959.74805,453.0625 L1961.48438,463.070312 L1961.48438,470.884766 L1966.17383,480.761719 L1955.64453,483.519531 L1929.20312,492.005859 L1917.61133,492.527344 L1910.57617,488.728516 L1898.11523,498.625 L1880.48828,497.583984 L1874.82031,481.824219 L1864.29102,477.677734 L1855.82422,475.941406 L1849.28906,472.357422 L1839.95508,474.441406 L1831.31445,475.308594 L1826.47461,482.408203 L1820.74414,486.533203 L1811.04102,497.757813 L1801.26953,500.494141 L1798.85938,508.222656 L1811.32617,516.648438 L1824.1543,513.521484 L1840.67773,521.447266 L1850.20508,519.537109 L1860.20703,525.945312 L1861.25,542.03125 L1871.64648,553.144531 L1871.64648,557.832031 L1867.30664,564.410156 L1861.35352,567.515625 L1861.875,579.626953 L1854.0625,588.830078 L1845.5957,597.775391 L1841.31641,604.943359 L1826.25195,604.943359 L1821.36328,608.875 L1810.61914,601.755859 L1809.25,616.693359 L1804.21484,627.939453 L1813.00781,633.148438 L1817.17578,644.330078 L1817.69531,651.560547 L1818.8418,662.392578 L1809.13281,667.732422 L1808.61133,676.699219 L1804.70312,681.476562 L1807.13281,690.617188 L1812.23828,698.285156 L1813.80078,710.529297 L1827.82422,702.388672 L1831.12305,711.917969 L1826.95508,719.017578 L1819.37695,722.121094 L1818.50977,728.330078 L1822.76758,736.476562 L1831.75391,736.476562 L1831.60156,743.511719 L1817.59961,749.416016 L1817.59961,754.736328 L1825.34961,759.556641 L1819.16211,763.986328 L1777.02539,764.486328 L1762.58594,776.384766 L1748.08398,796.574219 L1732.3457,812.855469 L1720.92773,822.974609 L1708.17773,832.826172 L1698.03906,833.521484 L1697.53906,870.076172 L1701.12305,876.568359 L1706.78906,879.695312 L1710.41406,885.925781 L1711.41406,899.390625 L1699.30273,889.320312 L1691.83594,886.369141 L1681.4375,881.160156 L1666.52539,876.296875 L1650.91992,879.423828 L1640.89062,882.722656 L1631.90234,887.5625 L1621.375,887.5625 L1614.18555,886.173828 L1603.11523,893.119141 L1587.57031,896.765625 L1581.05664,901.607422 L1581.05664,911.572266 L1568.24805,914.351562 L1562.42969,917.435547 L1554.11523,910.142578 L1546.82227,906.84375 L1528.30664,910.316406 L1512.1582,909.099609 L1501.28125,913.267578 L1487.08398,910.316406 L1472.23437,908.773438 L1453.54492,911.009766 L1445.38477,911.878906 L1435.0293,924.929688 L1425.91016,918.525391 L1417.0957,923.539062 L1399.85352,929.78125 L1393.83789,945.802734 L1387.76172,964.167969 L1365.87695,973.134766 L1354.80469,984.59375 L1343.81836,992.498047 L1333.67773,996.449219 L1332.98438,1003.50586 L1326.40625,1012.82031 L1319.91211,1010.36719 L1310.42578,999.837891 L1303.32617,1000.35938 L1288.19336,997.927734 L1284.19922,991.71875 L1257.04297,997.927734 L1216.21094,994.650391 L1198.14648,978.912109 L1183.27539,978.042969 L1172.53125,979.085938 L1150.91602,966.0625 L1135.52539,970.056641 L1120.11328,970.056641 L1105.74219,963.285156 L1085.35742,963.285156 L1070.81445,954.603516 L1057.3125,955.644531 L1050.23438,951.824219 L1036.73242,951.302734 L1022.03711,951.302734 L1012.57031,945.941406 L994.400391,952.193359 L983.023438,952.693359 L970.195312,949.566406 L950.984375,942.294922 L938.351562,936.064453 L907.683594,934.501953 L865.046875,932.591797 L858.621094,922.716797 L846.746094,916.505859 L838.800781,922.910156 L826.25,912.464844 L794.730469,914.201172 L784.070312,907.103516 L765.748047,902.935547 L753.287109,894.794922 L748.314453,886.113281 L742.064453,872.9375 L732.230469,868.8125 L723.894531,864.470703 L721.638672,857.609375 L721.638672,850.074219 L726.457031,844.060547 L714.435547,822.537109 L702.863281,828.072266 L696.523438,819.882812 L684.083984,814 L687.513672,803.839844 L681.785156,795.525391 L680.394531,771.058594 L700.105469,768.800781 L705.96875,751.972656 L700.933594,746.957031 L678.054687,749.041016 L661.427734,757.355469 L645.494141,762.001953 L629.193359,764.605469 L618.683594,773.941406 L602.537109,779.84375 L586.929688,781.927734 L584.152344,791.304688 L577.726563,789.220703 L564.287109,781.470703 L548.181641,779.40625 L540.972656,776.802734 L522.259766,782.533203 L510.667969,772.023438 L495.298828,789.978516 L473.740234,780.316406 L430.324219,789.326172 L419.279297,800.285156 L407.470703,810.835938 L406.949219,821.90625 L400.894531,833.783203 L397.248047,843.3125 L386.001953,860.814453 L377.189453,859.771484 L358.457031,859.771484 L346.732422,860.292969 L331.648438,855.779297 L320.361328,848.660156 L310.527344,849.701172 L320.076172,834.003906 L307.095703,835.220703 L297.955078,821.738281 L286.363281,823.302734 L268.867187,829.185547 L247.177734,825.232422 L240.365234,810.724609 L248.505859,795.181641 L238.324219,785.693359 L228.335938,776.726562 L223.537109,772.96875 L215.591797,768.996094 L199.964844,791.201172 L192.429688,796.347656 L183.984375,796.347656 L181.03125,806.376953 L174.607422,814.148438 L151.486328,824.003906 L138.158203,820.011719 L129.080078,812.128906 L120.787109,802.792969 L111.257812,798.453125 L102.097656,797.083984 L91.046875,791.027344 L88.4433594,782.171875 L92.9160156,770.060547 L92.9160156,765.414062 L88.0957031,756.640625 L79.2402344,756.140625 L66.3222656,747.021484 L56.4453125,745.980469 L36.9082031,737.1875 L21.4746094,740.138672 L27.5527344,708.425781 L14.2871094,695.292969 L10.8769531,677.574219 L4.53515625,671.365234 L14.390625,663.919922 L0.931640625,655.800781 L20.53125,635.875 L24.3515625,617.53125 L36.4648438,619.767578 L44.2363281,613.017578 L37.40625,595.794922 L36.0175781,586.585938 L20.8222656,579.833984 L18.2382812,571.347656 L29.1347656,566.658203 L40.1640625,568.353516 L52.4296875,563.685547 L60.375,552.484375 L73.3359375,540.085938 L80.4335938,540.085938 L82.8652344,549.767578 L87.3789062,552.892578 L94.8242188,556.867188 L108.195312,554.783203 L116.703125,563.095703 L123.455078,569.347656 L125.34375,579.160156 L136.109375,580.160156 L141.992188,589.537109 L152.714844,594.226562 L152.214844,604.060547 L144.964844,607.859375 L148.068359,614.894531 L148.416016,626.119141 L165.197266,622.994141 L183.386719,619.867188 L183.386719,625.882812 L177.308594,639.599609 L177.308594,649.955078 L169.517578,657.185547 L168.996094,665.152344 L186.318359,664.630859 L224.914062,633.744141 L228.886719,625.146484 L240.304688,615.136719 L252.091797,601.441406 L250.548828,590.390625 L239.652344,570.791016 L244.146484,559.740234 L237.763672,551.121094 L254.931641,547.126953 L254.931641,559.609375 L274.859375,566.859375 L288.6875,554.400391 L298.564453,557.177734 L310.482422,556.136719 L314.455078,561.845703 L324.615234,564.796875 L326.462891,573.158203 L335.277344,572.117188 L359.849609,565.171875 L362.28125,573.269531 L352.925781,585.320312 L367.90625,586.861328 L382.101562,605.572266 L376.761719,620.748047 L416.205078,622.136719 L434.568359,608.789062 L449.9375,609.830078 L445.271484,621.318359 L462.246094,620.970703 L478.873047,600.828125 L495.716797,600.828125 L490.570312,594.333984 L501.988281,580.375 L537.152344,577.595703 L538.714844,561.837891 L556.412109,548.917969 L565.207031,553.064453 L591.037109,552.023438 L607.142578,556.710938 L612.546875,546.597656 L647.001953,542.257812 L699.919922,546.015625 L697.490234,537.222656 L695.427734,510.871094 L716.394531,500.167969 L713.810547,514.802734 L733.869141,511.349609 L752.712891,514.996094 L764.457031,513.066406 L764.457031,523.03125 L779.265625,539.3125 L794.617188,532.832031 L807.861328,519.914062 L841.984375,521.283203 L849.410156,530.076172 L860.458984,543.230469 L855.3125,553.390625 L854.792969,562.552734 L857.722656,569.283203 L869.835938,569.783203 L895.130859,598.896484 L905.779297,596.189453 L910.578125,599.835938 L923.947266,590.111328 L915.871094,579.214844 L923.253906,568.011719 L920.300781,558.871094 L926.490234,552.857422 L927.011719,544.738281 L934.283203,537.292969 L934.802734,521.226562 L913.140625,505.121094 L905.542969,508.246094 L885.220703,509.789063 L882.636719,499.105469 L893.818359,485.167969 L893.818359,477.027344 L911.599609,456.794922 L910.230469,447.134766 L901.089844,437.472656 L891.755859,417.804688 L883.677734,410.767578 L876.080078,408.878906 L874.109375,402.498047 Z M874.109375,402.498047']
			),
			'location' => DB::raw('POINT(47.516231, 14.550072)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}