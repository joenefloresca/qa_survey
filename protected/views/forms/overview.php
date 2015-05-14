<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<table id="jqGrid"></table>
    <div id="jqGridPager"></div>
    
    <script>
        $(function() {
          $(document).ready(function () {
                 $("#jqGrid").jqGrid({
                     url: 'http://trirand.com/blog/phpjqgrid/examples/jsonp/getjsonp.php?callback=?&qwery=longorders',
                     mtype: "GET",
                     datatype: "jsonp",
                     colModel: [
                         { label: 'OrderID', name: 'OrderID', key: true, width: 75 },
                         { label: 'Customer ID', name: 'CustomerID', width: 150 },
                         { label: 'Order Date', name: 'OrderDate', width: 150 },
                         { label: 'Freight', name: 'Freight', width: 150 },
                         { label:'Ship Name', name: 'ShipName', width: 150 }
                     ],
                                     viewrecords: true,
                     width: 780,
                     height: 250,
                     rowNum: 20,
                     pager: "#jqGridPager"
                 });
             });
       });
  </script>
