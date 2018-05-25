
$(document).ready(function() {
    var urls = "http://apis.data.go.kr/1262000/CountrySafetyService/getCountrySafetyInfo?ServiceKey=qSI7OoN2emrJs2F6CHVSGTZfGNt5yc%2Fvv7VR4QXSRZ3jW03pyG3jXKrckEGZSUKNRfqC8BMhSZEScnyKex6yLA%3D%3D";
    urls += "&id=";
    urls += 'ATC0000000005737';
    $.ajax({
        url : urls,
        type : "get",
        dataType : "xml",
        success : function(result) {
            var myxml = result.responseText;
            myxml = $.parseXML(myxml)
            myxml = $(myxml);

            console.log(myxml);
            var item;
         if(item = $(myxml.find("item"))){
             console.log('found item');
             var $p = $("<p/>");
             var countryName = $(item.find("countryName"));
             console.log(countryName.text());
             $('.api').append($p.text(countryName.text()));
         }else console.log("not found");
        },
        error : function(xhr,status,errthrown){
            console.log("에러");
        }
    });
});

/*
$(document).ready(function() {

    var urls = "http://apis.data.go.kr/1262000/CountrySafetyService/getCountrySafetyInfo?ServiceKey=qSI7OoN2emrJs2F6CHVSGTZfGNt5yc%2Fvv7VR4QXSRZ3jW03pyG3jXKrckEGZSUKNRfqC8BMhSZEScnyKex6yLA%3D%3D&id=ATC0000000005737?callback=showApi";
    $.ajax({
          url: urls, //<- xml 위치
          dataType: "xml", // xml 형식
          type: 'GET',
        success: function(res) {
            var myXML = res.responseText; // xml을 text형식으로 가져온 것이다. alert을 찍어보면 알수 있다.
                // This is the part xml2Json comes in.
            xmlDoc = $.parseXML( myXML ),
            $xml = $(xmlDoc),
            $title = $xml.find("title");
            var startXML= $xml;

            $('.api').append(text($xml));
            }
        });
    });
        
$( document ).delegate("#home", "pageshow", function() {
$.mobile.showPageLoadingMsg();
    xmlLoader();
});
*/
