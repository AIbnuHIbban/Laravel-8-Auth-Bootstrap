export function exportable() {
	$('.datatable').DataTable({
	    buttons: ['print'],
	    language: {
            url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Indonesian.json'
        }
	});
}
	