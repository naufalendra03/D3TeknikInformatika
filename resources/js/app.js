import "./bootstrap";
import "flowbite";
import { DataTable } from "simple-datatables";

document.addEventListener("DOMContentLoaded", function () {
    const dataTable = new DataTable("#search-table", {
        searchable: true,
        perPageSelect: false,
        sortable: true,
    });
});
