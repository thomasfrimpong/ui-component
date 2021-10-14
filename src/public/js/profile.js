$("select[name=milestone]").change(function () {
    var type=$(this).val()
    /*if(type=='Interested'){
       $("div.agreed_price").removeAttr('hidden');
       $("span.lead-commission").removeAttr('hidden');
       
    }*/
    if(type=='Commission Pending'){
      $("div.follow-up").removeAttr('hidden');
    }

    if(type=='Commission Payment (Sale)'){
      $(".commission").removeAttr('hidden');
    }

    if(type=='Reservation Fee'){
      $(".booking").removeAttr('hidden');
    }
    if(type=='Viewing Scheduled'){
      $("div.viewing").removeAttr('hidden');
    }
    if(type=='Viewing Completed'){
      $("div.viewing").removeAttr('hidden');
    }

});