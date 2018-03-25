<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Jquery_Script
{
#==========================================================================================
#------------------------------------------------------------------------------------------
	public static function Summary()
	{
?>jQuery.noConflict();
var example = 'column-parsed', 
theme = 'default';
(function($){ // encapsulate jQuery
	Highcharts.chart('container', 
	{
		data: { table: 'datatable' },
		chart:{ type: 'column' },
		title:{ text: 'Data dari jadual sedia ada' },
		yAxis:{
			allowDecimals: false,
			title: { text: 'Marks' }
		},
		tooltip: {
			formatter: function () {
				return '<b>' + this.series.name + '</b><br/>' +
				this.point.y + ' ' + this.point.name.toLowerCase();
			}
		}
	});	
})(jQuery);
<?php
	}
#------------------------------------------------------------------------------------------
	public static function kodSummary1($namaTajukGraf)
	{
?>
jQuery.noConflict();
var example = 'column-parsed', 
theme = 'default';
(function($){ // encapsulate jQuery
	Highcharts.chart('container', 
	{
		 data: { table: 'kontena1' },
		chart: {  type: 'column' },
		title: {  text: '<?php echo $namaTajukGraf ?>' },
		yAxis: {
				allowDecimals: false,
				title: { text: 'markah purata' }
		},
		tooltip: {
			formatter: function () {
				return '<b>' + this.series.name + '</b><br/>' +
				this.point.y + ' ' + this.point.name.toLowerCase();
			}
		}
	});
})(jQuery);
<?php
	}
#------------------------------------------------------------------------------------------
	public static function kodSummary2($namaTajukGraf)
	{
?>/* Kod Summary2 */
jQuery.noConflict();
var example = 'column-rotated-labels', 
theme = 'default';
(function($){ // encapsulate jQuery
	Highcharts.chart('kontena2', 
	{
		chart: { type: 'column' },
		title: { text: 'World\'s largest cities per 2014' },
		subtitle: {	text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>' },
		xAxis: {
			type: 'category',
			labels: {
				rotation: -45,
				style: { fontSize: '13px', fontFamily: 'Verdana, sans-serif' }
			}
		},
		yAxis: { min: 0, title: { text: 'Population (millions)' } },
		legend: { enabled: false  },
		tooltip: { pointFormat: 'Population in 2008: <b>{point.y:.1f} millions</b>' },
		series: [{
			name: 'Population',
			data: [
					['Shanghai', 23.7],
					['Lagos', 16.1],
					['Istanbul', 14.2],
					['Karachi', 14.0],
					['Mumbai', 12.5],
					['Moscow', 12.1],
					['Sao Paulo', 11.8],
					['Beijing', 11.7],
					['Guangzhou', 11.1],
					['Delhi', 11.1],
					['Shenzhen', 10.5],
					['Seoul', 10.4],
					['Jakarta', 10.0],
					['Kinshasa', 9.3],
					['Tianjin', 9.3],
					['Tokyo', 9.0],
					['Cairo', 8.9],
					['Dhaka', 8.9],
					['Mexico City', 8.9],
					['Lima', 8.9]
				],
			dataLabels: {
				enabled: true,
				rotation: -90,
				color: '#FFFFFF',
				align: 'right',
				format: '{point.y:.1f}', // one decimal
				y: 10, // 10 pixels down from the top
				style: { fontSize: '13px', fontFamily: 'Verdana, sans-serif' }
			}
		}]
	});
})(jQuery);
<?php
	}
#------------------------------------------------------------------------------------------
	public static function kodSummary3()
	{
?>/* Kod Summary3 */
jQuery.noConflict();
var example = 'column-rotated-labels', 
theme = 'default';
(function($){ // encapsulate jQuery
	Highcharts.chart('kontena3', 
	{
		chart: { type: 'column' },
		title: { text: 'peperiksaan : analisa subjek' },
		xAxis: {
			type: 'category',
			labels: {
				rotation: 45,
				style: { fontSize: '13px', fontFamily: 'Verdana, sans-serif' }
			}
		},
		yAxis: { min: 0, title: { text: 'Markah Purata - 2016' } },
		legend: { enabled: false  },
		tooltip: { pointFormat: '<b>{point.y:.1f} %</b>' },
		series: [{
			name: 'mata pelajaran',
			data: [
					['bahasa arab', 77],
					['bahasa inggeris bertulis', 84],
					['bahasa inggeris lisan', 0],
					['bahasa melayu bertulis', 67],
					['bahasa melayu lisan', 0],
					['geografi', 67],
					['ict', 66],
					['kemahiran hidup bersepadu 1', 70],
					['kemahiran hidup bersepadu 2', 60],
					['matematik', 42],
					['pendidikan islam', 84],
					['pendidikan jasmani dan kesihatan', 0],
					['sains', 65],
					['sejarah', 52]
				],
			dataLabels: {
				enabled: true,
				rotation: 0,
				color: '#FFFFFF',
				align: 'right',
				format: '{point.y:.1f}', // one decimal
				y: -5, // 10 pixels down from the top
				style: { fontSize: '13px', fontFamily: 'Verdana, sans-serif' }
			}
		}]
	});
})(jQuery);
<?php
	}
#------------------------------------------------------------------------------------------
	public static function kodSummary4()
	{
?>/* Kod Summary4 */
jQuery.noConflict();
var example = 'column-rotated-labels', 
theme = 'default';
(function($){ // encapsulate jQuery
	Highcharts.chart('kontena4', 
	{
		chart: { type: 'column' },
		title: { text: 'Peperiksaan : Analisa Keseluruhan'},
		subtitle: {	text: 'Pentafsiran Sumatif' },
		xAxis: {
			categories: [
				'bahasa arab',
				'bahasa inggeris bertulis', 
				'bahasa inggeris lisan',
				'bahasa melayu bertulis',
				'bahasa melayu lisan',
				'geografi',
				'ict',
				'kemahiran hidup bersepadu 1',
				'kemahiran hidup bersepadu 2',
				'matematik',
				'pendidikan islam',
				'pendidikan jasmani dan kesihatan',
				'sains',
				'sejarah'
			],
			crosshair: true,
			labels: { rotation: 60 }
		},
		yAxis: {min: 0, title: { text: 'Markah Purata 2016' } },
		tooltip: {
			backgroundColor: '#FCFFC5',
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
				'<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
			footerFormat: '</table>',
			shared: true,
			useHTML: true
		},
		plotOptions: { column: { pointPadding: 0.2, borderWidth: 0 } },
		series: [{
				name:'Sumatif 1', data:[60,82,33, 75,0,74, 60,65,58, 52,74,0, 64,53],
				dataLabels: { enabled: true, rotation: 0, y: -5}
			},{
				name:'Sumatif 2', data:[0,0,0, 0,0,0, 0,0,0, 0,80,0, 0,0],
				dataLabels: { enabled: true, rotation: 0, y: -5}
			},{ 
				name:'Sumatif 3', data: [0,0,0, 0,0,0, 0,0,0, 0,0,0, 0,0],
				dataLabels: { enabled: true, rotation: 0, y: -5}
		}]
	});
})(jQuery);

<?php
	}
#------------------------------------------------------------------------------------------
	public static function kodSummary5()
	{
?>/* Kod Summary5 */
jQuery.noConflict();
var example = 'column-rotated-labels', 
theme = 'default';
(function($){ // encapsulate jQuery
	Highcharts.chart('kontena5', 
	{
		chart: { type: 'column' },
		title: { text: 'Peperiksaan : Analisa Tahunan'},
		subtitle: {	text: '' },
		xAxis: {
			categories: [
				'bahasa arab',
				'bahasa inggeris bertulis', 
				'bahasa inggeris lisan',
				'bahasa melayu bertulis',
				'bahasa melayu lisan',
				'geografi',
				'ict',
				'kemahiran hidup bersepadu 1',
				'kemahiran hidup bersepadu 2',
				'matematik',
				'pendidikan islam',
				'pendidikan jasmani dan kesihatan',
				'sains',
				'sejarah'
			],
			crosshair: true,
			labels: { rotation: 60 }
		},
		yAxis: {min: 0, title: { text: 'Markah Purata 2016' } },
		tooltip: {
			backgroundColor: '#FCFFC5',
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}:</td>' +
				'<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
			footerFormat: '</table>',
			shared: true,
			useHTML: true
		},
		plotOptions: { column: { pointPadding: 0.2, borderWidth: 0 } },
		series: [{
				name:'2016', data:[60,82,33, 75,0,74, 60,65,58, 52,74,0, 64,53],
				dataLabels: { enabled: true, rotation: 0, y: -5}
			},{
				name:'2015', data:[0,0,0, 0,0,0, 0,0,0, 0,0,0, 0,0],
				dataLabels: { enabled: true, rotation: 0, y: -5}
			},{ 
				name:'2014', data: [0,0,0, 0,0,0, 0,0,0, 0,0,0, 0,0],
				dataLabels: { enabled: true, rotation: 0, y: -5}
			},{
				name:'2013', data:[0,0,0, 0,0,0, 0,0,0, 0,0,0, 0,0],
				dataLabels: { enabled: true, rotation: 0, y: -5}
			},{ 
				name:'2012', data: [0,0,0, 0,0,0, 0,0,0, 0,0,0, 0,0],
				dataLabels: { enabled: true, rotation: 0, y: -5}
		}]
	});
})(jQuery);

<?php
	}
#------------------------------------------------------------------------------------------
	public static function kodSummary6()
	{
?>/* Kod Summary5 */
jQuery.noConflict();
var example = 'column-rotated-labels', 
theme = 'default';
(function($){ // encapsulate jQuery
	Highcharts.chart('kontena6', 
	{
		chart: { type: 'column' },
		title: { text: 'Peperiksaan : Analisa Prasekolah'},
		subtitle: {	text: '' },
		xAxis: {
			categories: [
				'bahasa arab',
				'bahasa inggeris bertulis', 
				'bahasa inggeris lisan',
				'bahasa melayu bertulis',
				'bahasa melayu lisan',
				'geografi',
				'ict',
				'kemahiran hidup bersepadu 1',
				'kemahiran hidup bersepadu 2',
				'matematik',
				'pendidikan islam',
				'pendidikan jasmani dan kesihatan',
				'sains',
				'sejarah'
			],
			crosshair: true,
			labels: { rotation: 60 }
		},
		yAxis: {min: 0, title: { text: 'Markah Purata 2016' } },
		tooltip: {
			backgroundColor: '#FCFFC5',
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}:</td>' +
				'<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
			footerFormat: '</table>',
			shared: true,
			useHTML: true
		},
		plotOptions: { column: { pointPadding: 0.2, borderWidth: 0 } },
		series: [{
				name:'SMIAA GOMBAK', data:[60,82,33, 75,0,74, 60,65,58, 52,74,0, 64,53],
				dataLabels: { enabled: true, rotation: 0, y: -5}
			},{
				name:'SMAIAABM', data:[0,0,0, 0,0,0, 0,0,0, 0,0,0, 0,0],
				dataLabels: { enabled: true, rotation: 0, y: -5}
		}]
	});
})(jQuery);

<?php
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
