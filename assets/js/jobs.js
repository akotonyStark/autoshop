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

