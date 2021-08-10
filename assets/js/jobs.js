$(document).ready(function(){
    console.log("Loading.... ", data);
})

$('.viewItem').click(function(){
    let id = this.id;
    //console.log(id);
    getDataByID(id);

})


function getDataByID(id){
    let bigData = data;
    let res = bigData.filter((record, index) => record.Id == id);
    //console.log(res[0].Client)
    $('#clientNameU').val(res[0].Client);
    $('#phoneU').val(res[0].Phone);
    $('#locationU').val(res[0].Location);
    $('#modelU').val(res[0].Model);
    $('#prodYearU').val(res[0].YearOfMake);
    $('#problemU').val(res[0].Problem);
    $('#estimatedCostU').val(res[0].EstimatedCost);
    $('#paymentAmountU').val(res[0].AmountPaid);
    $('#numberPlateU').val(res[0].PlateNo);
    $('#estimatedDateOfCompletionU').val(res[0].EstimatedDate);
    $('#jobStatusU option:selected').val(res[0].JobStatus); $('#jobStatusU option:selected').text(res[0].JobStatus);
    $('#transmissionU option:selected').val(res[0].Transmission); $('#transmissionU option:selected').text(res[0].Transmission); 
    $('#carTypeU option:selected').val(res[0].Type); $('#carTypeU option:selected').text(res[0].Type);
    $('#bodyColorU option:selected').val(res[0].Color);     $('#bodyColorU option:selected').text(res[0].Color);    

}
   
   
   $("#printList").click(() => {

    // Reduce font-size from 18px to 10px [For Downlaod Qulaity]
    $("#jobsList").html($("#jobsList").html().replace(/18px/g, "10px"))

    const timeElapsed = Date.now();
    const today = new Date(timeElapsed);


    var name = `${today.toDateString()} - Jobs.pdf`;
    // Convert the DOM element to a drawing using kendo.drawing.drawDOM
     kendo.drawing.drawDOM("#jobsList", {
            paperSize: "A4",
            margin: {
                left: "2mm",
                top: "4mm",
                right: "2mm",
                bottom: "4mm"
            },
            font: "5px Verdana",
            landscape: true
        })
        .then(function(group) {
            // Render the result as a PDF file
            return kendo.drawing.exportPDF(group);
        })
        .done(function(data) {
            // Save the PDF file
            kendo.saveAs({
                dataURI: data,
                fileName: name
            });
            $("#jobsList").html($("#jobsList").html().replace(/10px/g, "18px"))
        });
   
   
   console.log(name)
 });

