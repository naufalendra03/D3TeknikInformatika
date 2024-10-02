import "./bootstrap";
import "flowbite";
import { DataTable } from "simple-datatables";

document.addEventListener("DOMContentLoaded", function () {
    const dataTable = new DataTable("#default-table", {
        searchable: false,
        perPageSelect: false,
    });
});
