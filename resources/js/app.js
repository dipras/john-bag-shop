import './bootstrap';
import DataTable from 'datatables.net-dt';
import 'datatables.net-buttons-dt';
import "datatables.net-responsive-dt";
 
let table = new DataTable('#myTable', {
    responsive: true
});