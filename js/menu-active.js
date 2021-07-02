   $(document).ready(function(){
// ---------------------------------------------------------

//              ======== MENU =========
//---------------------------------------------------------

            var menu_id= $("#menu_id").val();
            if(menu_id == 1){
                    $("#menu-1").addClass("active");
                }else if(menu_id== 2){
                   $("#menu-2").addClass("active");
                   $("#drop-menu-1").addClass("drop-act");
                }else if(menu_id == 3){
                    $("#menu-3").addClass("active");
                     $("#drop-menu-6").addClass("drop-act");
                }else if(menu_id== 4){
                    $("#menu-4").addClass("active");
                
                }else if(menu_id== 5){
                    $("#menu-5").addClass("active");
                
                }else if(menu_id== 6){
                    $("#menu-6").addClass("active");
                
                }

                //  Drop menu
                var did = $("#did").val();

                if(did == 1){
                    $("#menu-2").addClass("active");
                    $("#drop-menu-2").addClass("drop-act");
                }else if(did == 2){
                    $("#menu-2").addClass("active");
                    $("#drop-menu-3").addClass("drop-act");
                }else if(did == 3){
                    $("#menu-2").addClass("active");
                    $("#drop-menu-4").addClass("drop-act");
                }else if(did == 4){
                    $("#menu-2").addClass("active");
                    $("#drop-menu-5").addClass("drop-act");
                }else if(did == 5){
                    $("#menu-3").addClass("active");
                    $("#drop-menu-7").addClass("drop-act");
                }else if(did == 6){
                    $("#menu-3").addClass("active");
                    $("#drop-menu-8").addClass("drop-act");
                }
       

});