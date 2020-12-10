import {getProvinsi, getKota, getKecamatan} from './provinsi.js'

(function() {
	getProvinsi()
	$('select.provinsi').change(()=>{
		let id = $(`select.provinsi option:selected`).data('id')
		getKota(id)
	})
	$('select.kota').change(()=>{
		let id = $(`select.kota option:selected`).data('id')
		getKecamatan(id)
	})
})();
