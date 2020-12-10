import {exportable} from '../components/datatables.js'
import {getData} from '../components/fetching.js'

exportable();
getData('', 'https://api.dralimusri.sipondok.com/api/v1/audio');