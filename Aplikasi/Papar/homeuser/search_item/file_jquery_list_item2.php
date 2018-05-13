<script>
$(document).ready(function(){
  $('#example').dataTable().yadcf([
        {column_number : 0},
        {column_number : 1,  filter_type: "range_number_slider", filter_container_id: "external_filter_container"},
        {column_number : 2, data: ["Yes", "No"], filter_default_label: "Select Yes/No"},
        {column_number : 3, text_data_delimiter: ",", filter_type: "auto_complete"},
        {column_number : 4, column_data_type: "html", html_data_type: "text", filter_default_label: "Select tag"}]);
});
</script>