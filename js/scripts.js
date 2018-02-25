function addRecord() {
    // get values
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var email = $("#email").val();
 
    // Add record
    $.post("ajax/addRecord.php", {
        fname: fname,
        lname: lname,
        email: email
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");
 
        // read records again
        readRecords();
 
        // clear fields from the popup
        $("#fname").val("");
        $("#lname").val("");
        $("#email").val("");
    });
}
 
// READ records
function readRecords() {
    $.get("listusers.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}