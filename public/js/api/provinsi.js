export function getProvinsi() {
	fetch('https://api.rajaongkir.sipondok.com/v1/provinsi')
	.then(res => res.json())
	.then(result => {
		$('select.provinsi').append(`<option>PILIH PROVINSI</option>`)
		result.map((res,index) => {
			$('select.provinsi').append(`<option data-id="${res.province_id}" value="${res.province}">${res.province}</option>`)
		})
	})
}

export function getKota(provinsi) {
	fetch(`https://api.rajaongkir.sipondok.com/v1/kota?provinsi=${provinsi}`)
	.then(res => res.json())
	.then(result => {
		$('select.kota').append(`<option>PILIH KOTA</option>`)
		result.map((res,index) => {
			console.log(res)
			$('select.kota').append(`<option data-id="${res.city_id}" value="${res.type} ${res.city_name}">${res.type} ${res.city_name}</option>`)
		})
	})
}

export function getKecamatan(kota) {
	fetch(`https://api.rajaongkir.sipondok.com/v1/kecamatan/kota/${kota}`)
	.then(res => res.json())
	.then(result => {
		$('select.kecamatan').append(`<option>PILIH KECAMATAN</option>`)
		result.map((res,index) => {
			$('select.kecamatan').append(`<option data-id="${res.city_id}" value="${res.subdistrict_name}">${res.subdistrict_name}</option>`)
		})
	})
}