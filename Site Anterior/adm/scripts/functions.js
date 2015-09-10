










function mascaraData(data){ 
    var mydata ="";
    mydata = mydata + data; 
    if (mydata.length == 2){ 
        mydata = mydata + '/'; 
        $("#dataNoticia").val(mydata); 
    } 
    if (mydata.length == 5){ 
        mydata = mydata + '/'; 
        $("#dataNoticia").val(mydata); 
    } 
             
} 



			
$("#loading").hide();

function selecionar_tudo()


{
    // written by Daniel P 3/21/07
    // toggle all checkboxes found on the page
    var inputlist = document.getElementsByTagName("input");
    for (i = 0; i < inputlist.length; i++) {
        if ( inputlist[i].getAttribute("type") == 'checkbox' ) {	// look only at input elements that are checkboxes
            if (inputlist[i].checked)	inputlist[i].checked = false
            else inputlist[i].checked = true;
        }
    }

}

function deselecionar_tudo(){ 
    for (i=0;i<document.form.elements.length;i++) 
        if(document.form.elements[i].type == "checkbox")	
            document.form.elements[i].checked=0 
} 

function apagatodos(){
	
    alert(document.form.elements[1].checked);
	
}

function del2(tabela,id,nome,categoria){
	
	
    if (confirm("Deseja realmente apagar "+nome)) {  
        $.ajax({
            url: "action.php",
            dataType: 'json',
            data: {
                id2:id,
                tabela:tabela,
                acao:"del"+tabela,
                cat:categoria
            },
            success:function dados(data)
            {   
    
                if(data.result==1){ 
                    setTimeout("chamapagina('editar"+tabela+".php')",2000);
                    $("#true").css("display","block");
                }else{
		 
                    setTimeout("chamapagina('editar"+tabela+".php')",2000);
                    $("#error").css("display","block"); 
		 
                }
	
	 
            }
        });
    }else{
        return false;
    }
	
}

function del(tabela,id,nome){
	
	
    if (confirm("Deseja realmente apagar "+nome)) {  
        $.ajax({
            url: "action.php",
            dataType: 'json',
            data: {
                id2:id,
                tabela:tabela,
                acao:"del"+tabela
                },
            success:function dados(data)
            {   
    
                if(data.result==1){ 
                    setTimeout("chamapagina('editar"+tabela+".php')",2000);
                    $("#true").css("display","block");
                }else{
		 
                    setTimeout("chamapagina('editar"+tabela+".php')",2000);
                    $("#error").css("display","block"); 
		 
                }
	
	 
            }
        });
    }else{
        return false;
    }
	
}




function fade2(){
    $("#true").fadeOut('slow');
	
}
function fade1(){
    $("#error").fadeOut('slow');
	
}
function sim(){
    $("#true").show('slow');
}
function nao(){
    $("#error").show('slow');
}
function logout(){
    $.ajax({
        type: "POST",
        url:  "action.php",
        data: "acao=logout",
        success: function(){
            window.location = 'login.php';
        }
    });
		
}
function chamapagina2(p){
  
    window.location=p;
	 
}
function chamapagina(p){
  
    $("#rightside, #loading").empty().html('<img src="img/loading.gif" />');

    $("#rightside").load(p);
	 
}
	
function trim(v){
    var variavel = v;
    var re = new RegExp(/[a-z]/i);
    if (re.exec(variavel)) {
        return v;
    } else {
        return false;
    }
		
}
		

function acao(n){

    if(n==9){
        void(0);
        var options = { 
            target: '#preview', // target element(s) to be updated with server response 
            beforeSubmit: showRequest, // pre-submit callback 
            success: showResponse // post-submit callback 
        }; 

        $("#preview").html('');
        $("#preview").html('<img src="img/loader.gif" alt="Uploading...."/>');
        $('#videoForm').submit(function() { 
            $(this).ajaxSubmit(options); 
            return false; 
        }).submit();

        function showRequest(formData, jqForm, options) {
            return true; 
        } 
        function showResponse(responseText, statusText, xhr, $form) {
            $("#preview").html("");
            $("#videoPath").val(responseText)
        }	
	 
    }

    if(n==8){
        void(0);
        var categoria = $("#categoria").val();
        var foto  = $("#retorno").val();
        var id  = $("#idGaleria").val();
        var flag  = $("#flag").val();
	
        if(categoria==0){
            $("#categoria").addClass("inputbox errorbox");
            return false;
	 
        }
        $.ajax({
            type: "POST",
            url:  "action.php",
            data: "acao=updateGaleria&categoria="+categoria+"&retorno="+foto+"&idGaleria="+id+"&flag="+flag,
            async: false, 
            success: function() {
                $("#true").css("display","block"); 
                $("#categoria").val(0);
                $("#edit").fadeOut('slow');
                chamapagina('editarGaleria.php');
      
            },
            error: function(){
                $("#error").css("display","block");
                $("#categoria").val(0);
                $("#edit").fadeOut('slow');

            } 
	
        });
	 
	 
    }
	
	
    if(n==7){
        void(0);
	
        var categoria   = $("#categoria").val();
        var foto  = $("#retorno").val();
	
        if(categoria==0){
            $("#categoria").addClass("inputbox errorbox");
            return false;
	 
        }
        $.ajax({
            type: "POST",
            url:  "action.php",
            data: "acao=addImagem&categoria="+categoria+"&retorno="+foto,
            async: false, 
            success: function() {
                $("#true").css("display","block"); 
                $("#categoria").val(0);
                $("#preview").html('');
                $("#photoimg").val('');  
            },
            error: function(){
                $("#error").css("display","block");
                $("#preview").html('');
                $("#categoria").val(0);
                $("#photoimg").val('');
            } 
        });
	 
	 
    }
    if(n==5){
        void(0);
        var titulo = $("#titulo").val();
        var data   = $("#dataNoticia").val();
        var msg   = $("#wysiwyg").val();
        var foto  = $("#retorno").val();
        if(nome==""){
            $("#nome").addClass("inputbox errorbox");
            return false;
	 
        }
        if(msg==""){
            $("#wysiwyg").addClass("inputbox errorbox");
            return false;
	 
        }
        $.ajax({
            type: "POST",
            url:  "action.php",
            data: "acao=addP&nome="+nome+"&data="+data+"&msg="+msg+"&retorno="+foto,
            async: false, 
            success: function() {
                $("#true").css("display","block"); 
                $("#wysiwyg").val('');
                $("#titulo").val('');
                $("#dataNoticia").val('');
                $("#preview").html('');
                $("#photoimg").val('');  
            },
            error: function(){
                $("#error").css("display","block");
                $("#msg").val('');
                $("#titulo").val('');
                $("#dataNoticia").val('');
                $("#preview").html('');
                $("#photoimg").val('');
            } 
        });
	 
	 
    }
    if(n==6){
        void(0);
        var titulo = $("#titulo").val();
        var data   = $("#dataNoticia").val();
        var msg   = $("#wysiwyg").val();
        var foto  = $("#retorno").val();
        var id  = $("#idNoticia").val();
        var flag  = $("#flag").val();
        if(titulo==""){
            $("#titulo").addClass("inputbox errorbox");
            return false;
	 
        }
        if(data==""){
            $("#dataNoticia").addClass("inputbox errorbox");
            return false;
	 
        }
        if(msg==""){
            $("#wysiwyg").addClass("inputbox errorbox");
            return false;
	 
        }
        $.ajax({
            type: "POST",
            url:  "action.php",
            data: "acao=updateNoticia&titulo="+titulo+"&data="+data+"&msg="+msg+"&retorno="+foto+"&idNoticia="+id+"&flag="+flag,
            async: false, 
            success: function() {
                $("#true").css("display","block"); 
                $("#wysiwyg").val('');
                $("#titulo").val('');
                $("#dataNoticia").val('');
                $("#edit").fadeOut('slow');
                chamapagina('editarnoticias.php');
      
            },
            error: function(){
                $("#error").css("display","block");
                $("#msg").val('');
                $("#titulo").val('');
                $("#dataNoticia").val('');
                $("#edit").fadeOut('slow');

            } 
	
        });
	 
	 
    }

	 
    if(n==1){
        var nome = $("#nome").val();
        var id   = $("#id").val();
 
        var posicao =  document.getElementById('posicao').options[document.getElementById('posicao').selectedIndex].value; 
        void(0);

        if(trim(nome)==""){
            $("#nome").addClass("inputbox errorbox");
            return false;
	 
        }
        if(posicao=="Ordem do menu"){
            $("#posicao").addClass("errorbox");
            return false;
	 
        } 	 
        $.ajax({
            type: "POST",
            url:  "action.php",
            data: "acao=addMenu&nome="+nome+"&posicao="+posicao,
            async: false, 
            success: function() {
	
                $("#true").css("display","block"); 
	  
                document.getElementById('nome').value = "";
                $("#posicao").val('')
            },
            error: function(){
                $("#error").css("display","block");
                document.getElementById('nome').value = "";
                $("#posicao").val('');
            } 
	
        });

    }
 
    if(n==2){
        var nome = $("#nome").val();
        var id   = $("#id").val();
 
        var posicao =  document.getElementById('posicao').options[document.getElementById('posicao').selectedIndex].value; 
        void(0);

        if(trim(nome)==""){
            $("#nome").addClass("inputbox errorbox");
            return false;
	 
        }
        if(posicao=="Ordem do menu"){
            $("#posicao").addClass("errorbox");
            return false;
	 
        } 

        $.ajax({
            type: "POST",
            url:  "action.php",
            data: "acao=alteraMenu&nome="+nome+"&posicao="+posicao+"&id="+id,
            async: false, 
            success: function() {
	
                $("#true2").css("display","block"); 
	 
                document.getElementById('nome').value = "";
                $("#edit").fadeOut("slow");
                $("#posicao").val('');
            // chamapagina("editarItens.php").delay(600);
            },
            error: function(){
                $("#error2").css("display","block");
                document.getElementById('nome').value = "";
                $("#edit").fadeOut("slow");
                $("#posicao").val('');
            } 
	
        });
    }

    if(n==3){	 
   
        var login = $("#clogin").val();
        var senha   = document.getElementById('cpassword').value;
        var nome   = $("#nome").val();
        var email   = $("#email").val();
        var permissao   = $("#permissao").val();
  
        void(0);

        if(trim(login)==""){
            $("#clogin").addClass("inputbox errorbox");
            return false;
	 
        }
        if(senha==""){
            $("#senha").addClass("inputbox errorbox");
            return false;
	 
        }
        if(nome==""){
            $("#nome").addClass("inputbox errorbox");
            return false;
	 
        }
        if(permissao==0){
            $("#permissao").addClass("inputbox errorbox");
            return false;
	 
        }

        $.ajax({
            type: "POST",
            url:  "action.php",
            data: "acao=addUsuario&clogin="+login+"&cpassword="+senha+"&nome="+nome+"&email="+email+"&permissao="+permissao,
            async: false, 
            success: function() {
	
                $("#true").css("display","block"); 
                $("#nome").val('');
                $("#clogin").val('');
                $("#cpassword").val('');
                $("#email").val('');
                $("#permissao").val(0);
    
            },
            error: function(){
                $("#error").css("display","block");
                $("#nome").val('');
                $("#clogin").val('');
                $("#cpassword").val('');
                $("#email").val('');
                $("#permissao").val(0);
	  
            } 
	
        });

    }
	
	
	
    if(n==4){
		
        var nome = $("#nome").val();
        var id   = $("#id").val();
        var senha = $("#cpassword").val();
        var email = $("#email").val();
        var clogin = $("#clogin").val();
        var permissao = $("#permissao").val();
 

        void(0);

        if(trim(nome)==""){
            $("#nome").addClass("inputbox errorbox");
            return false;
	 
        }
        if(senha==""){
            $("#cpassword").addClass("inputbox errorbox");
            return false;
	 
        }
        if(clogin==""){
            $("#clogin").addClass("inputbox errorbox");
            return false;
	 
        }
        if(permissao==""){
            $("#permissao").addClass("inputbox errorbox");
            return false;
	 
        }
	

        $.ajax({
            type: "POST",
            url:  "action.php",
            data: "acao=alteraUsuario&nome="+nome+"&cpassword="+senha+"&id="+id+"&email="+email+"&clogin="+clogin+"&permissao="+permissao,
            async: false, 
            success: function() {
	
                $("#true2").css("display","block"); 
                $("#edit").fadeOut("slow");
     
            },
            error: function(){
                $("#error2").css("display","block");
                $("#edit").fadeOut("slow");
   
            } 
	
        });
    }
}


function alteraDadosProdutos(id){

    $.getJSON("action.php",{
        id2:id,
        ac:"alteraDadosProdutos"
    },dados);
    function dados(data)
    {   
    
        $("#edit").fadeIn("slow");
        $("#produto").val(data.produto);
        $("#id").val(data.idProdutos);
        $("#id2").val(data.idProdutos);
        $("#destaque").val(data.destaque);
        $("#nomeimagem").val(data.foto);
        $("#descricao").val(data.descricao);
        $("#referencia").val(data.referencia);
        $("#preco").val(data.preco);
        $("#altura").val(data.altura);
        $("#largura").val(data.largura);
        $("#comprimento").val(data.comprimento);
        $("#foto").attr('src',data.foto);
        $("#thumbnail").attr('src',data.thumbs);
        $("#destaque2").val(data.destaque);
        $("#descricao2").val(data.descricao);
        $("#referencia2").val(data.referencia);
        $("#produto2").val(data.produto);

	
    }
}

function carregaDados(tabela,id){
    $.getJSON("action.php",{
        id2:id,
        ac:"carrega"+tabela
        },b);
    function b(data){
        return data;
		
    }

}


function alteraImagem(tabela,id){
    $.getJSON("action.php",{
        id2:id,
        ac:"carrega"+tabela
        },b);
    function b(data){
	
        $("#edit").fadeIn("slow");
        $("#idGaleria").val(data.idGaleria);	
        $("#categoria").val(data.CategoriaGaleria);	
        $("#retorno").val(data.fotoGaleria);
        $("#preview").html("<img src='../"+data.fotoGaleria+"' height='152' width='' ></img>");
	
    }

}	
	
function alteraNoticia(tabela,id){
    $.getJSON("action.php",{
        id2:id,
        ac:"carrega"+tabela
        },b);
    function b(data){
        $("#edit").fadeIn("slow");
        $("#idNoticia").val(data.idNoticia);	
        $("#wysiwyg").val(data.textoNoticia);	
        $("#dataNoticia").val(data.dataNoticia);	
        $("#titulo").val(data.tituloNoticia);	
        $("#retorno").val(data.fotoNoticias);
        $("#preview").html("<img src='"+data.thumbNoticia+"' height='188' width='' ></img>");
	
    }

}

function alteraDados(id){

    $.getJSON("action.php",{
        id2:id,
        ac:"alteraDados"
    },dados);
    function dados(data)
    {   
    
        $("#edit").fadeIn("slow");
        $("#nome").val(data.nome);
        $("#id").val(data.id);
        $("#posicao").val(data.posicao);
    }
}

function alteraDadosP(id){

    $.getJSON("action.php",{
        id2:id,
        acao:"visualiza"
    },dados);
    function dados(data)
    {   
    
        $("#edit").fadeIn("slow");
        $("#nome").val(data.nome);
        $("#wysiwyg").val(data.desc);
        $("#id").val(data.id);
     
    }
}

function alteraDadosN(id){

    $.getJSON("action.php",{
        id2:id,
        acao:"visualizaN"
    },dados);
    function dados(data)
    {   
    
        $("#edit").fadeIn("slow");
        $("#titulo").val(data.tituloNoticia);
        $("#wysiwyg").val(data.textoNoticia);
        $("#id").val(data.idNoticia);
        $("#data").val(data.dataNoticia);
     
    }
}
function alteraDadosB(id){

    $.getJSON("action.php",{
        id2:id,
        acao:"visualizaB"
    },dados);
    function dados(data)
    {     
        $("#edit").fadeIn("slow");
        $("#titulo").val(data.titulo);
        $("#wysiwyg").val(data.texto);
        $("#id").val(data.id);
    }
}
function alteraDadosUsuario(id){

    $.getJSON("action.php",{
        id2:id,
        ac:"alteraDadosUsuario"
    },dados);
    function dados(data)
    {   
    
        $("#edit").fadeIn("slow");
        $("#nome").val(data.nome);
        $("#email").val(data.email);
        $("#id").val(data.id);
        $("#clogin").val(data.login);
        $("#cpassword").val(data.senha);
        $("#permissao").val(data.permissao);
    }
}


 
// Side Navigation Menu Slide

$(document).ready(function() {
    
    $("#nav > li > a.collapsed + ul").slideToggle("medium");
    $("#nav > li > a").click(function() {
        $(this).toggleClass('expanded').toggleClass('collapsed').parent().find('> ul').slideToggle('medium');
    });
});


// Notifications Pop-Up Code

/************************************************************************
 * @name: bPopup
 * @author: Bjoern Klinggaard (http://dinbror.dk/bpopup)
 * @version: 0.4.1.min
 ************************************************************************/ 
(function(a){
    a.fn.bPopup=function(f,j){
        function s(){
            var b=a("input[type=text]",c).length!=0,k=o.vStart!=null?o.vStart:d.scrollTop()+g;
            c.css({
                left:d.scrollLeft()+h,
                position:"absolute",
                top:k,
                "z-index":o.zIndex
                }).appendTo(o.appendTo).hide(function(){
                b&&c.each(function(){
                    c.find("input[type=text]").val("")
                    });
                if(o.loadUrl!=null){
                    o.contentContainer=o.contentContainer==null?c:a(o.contentContainer);
                    switch(o.content){
                        case "ajax":
                            o.contentContainer.load(o.loadUrl);
                            break;
                        case "iframe":
                            a('<iframe width="100%" height="100%"></iframe>').attr("src",
                            o.loadUrl).appendTo(o.contentContainer);
                            break;
                        case "xlink":
                            a("a#bContinue").attr({
                            href:o.loadUrl
                            });
                        a("a#bContinue .btnLink").text(a("a.xlink").attr("title"))
                            }
                        }
            }).fadeIn(o.fadeSpeed,function(){
        b&&c.find("input[type=text]:first").focus();
        a.isFunction(j)&&j()
        });
    t()
    }
    function i(){
    o.modal&&a("#bModal").fadeOut(o.fadeSpeed,function(){
        a("#bModal").remove()
        });
    c.fadeOut(o.fadeSpeed,function(){
        o.loadUrl!=null&&o.content!="xlink"&&o.contentContainer.empty()
        });
    o.scrollBar||a("html").css("overflow","auto");
    a("."+
        o.closeClass).die("click");
    a("#bModal").die("click");
    d.unbind("keydown.bPopup");
    e.unbind(".bPopup");
    c.data("bPopup",null);
    return false
    }
    function u(){
    if(m){
        var b=[d.height(),d.width()];
        return{
            "background-color":o.modalColor,
            height:b[0],
            left:l(),
            opacity:0,
            position:"absolute",
            top:0,
            width:b[1],
            "z-index":o.zIndex-1
            }
        }else return{
    "background-color":o.modalColor,
    height:"100%",
    left:0,
    opacity:0,
    position:"fixed",
    top:0,
    width:"100%",
    "z-index":o.zIndex-1
    }
}
function t(){
    a("."+o.closeClass).live("click",i);
    o.modalClose&&
    a("#bModal").live("click",i).css("cursor","pointer");
    o.follow&&e.bind("scroll.bPopup",function(){
        c.stop().animate({
            left:d.scrollLeft()+h,
            top:d.scrollTop()+g
            },o.followSpeed)
        }).bind("resize.bPopup",function(){
        if(o.modal&&m){
            var b=[d.height(),d.width()];
            n.css({
                height:b[0],
                width:b[1],
                left:l()
                })
            }
            b=p(c,o.amsl);
        g=b[0];
        h=b[1];
        c.stop().animate({
            left:d.scrollLeft()+h,
            top:d.scrollTop()+g
            },o.followSpeed)
        });
    o.escClose&&d.bind("keydown.bPopup",function(b){
        b.which==27&&i()
        })
    }
    function l(){
    return e.width()<a("body").width()?
    0:(a("body").width()-e.width())/2
    }
    function p(b,k){
    var q=(e.height()-b.outerHeight(true))/2-k,v=(e.width()-b.outerWidth(true))/2+l();
    return[q<20?20:q,v]
    }
    if(a.isFunction(f)){
    j=f;
    f=null
    }
    o=a.extend({},a.fn.bPopup.defaults,f);
o.scrollBar||a("html").css("overflow","hidden");
var c=a(this),n=a('<div id="bModal"></div>'),d=a(document),e=a(window),r=p(c,o.amsl),g=r[0],h=r[1],m=a.browser.msie&&parseInt(a.browser.version)==6&&typeof window.XMLHttpRequest!="object";
this.close=function(){
    o=c.data("bPopup");
    i()
    };
return this.each(function(){
    if(!c.data("bPopup")){
        o.modal&&n.css(u()).appendTo(o.appendTo).animate({
            opacity:o.opacity
            },o.fadeSpeed);
        c.data("bPopup",o);
        s()
        }
    })
};

a.fn.bPopup.defaults={
    amsl:150,
    appendTo:"body",
    closeClass:"bClose",
    content:"ajax",
    contentContainer:null,
    escClose:true,
    fadeSpeed:250,
    follow:true,
    followSpeed:500,
    loadUrl:null,
    modal:true,
    modalClose:true,
    modalColor:"#000",
    opacity:0.7,
    scrollBar:true,
    vStart:null,
    zIndex:9999
}
})(jQuery);


	
			
