var myObj, myJSON, text, obj;

function proximoForm() {

    var Form_nome = document.getElementById("nome").value;
    var Form_email = document.getElementById("email").value;
    var Form_cpf = document.getElementById("cpf").value;
    var Form_crm = document.getElementById("crm").value;
    var Form_dtnasc = document.getElementById("dtnasc").value;
    var Form_cartid = document.getElementById("cartid").value;
    var Form_orgao = document.getElementById("orgao").value;
    var Form_estadoEm = document.getElementById("estadoEm").value;
    var Form_estadoMo = document.getElementById("estadoMo").value;
    var Form_cidade = document.getElementById("cidade").value;
    var Form_cep = document.getElementById("cep").value;
    var Form_bairro = document.getElementById("bairro").value;
    var Form_endereco = document.getElementById("endereco").value;
    var Form_tel = document.getElementById("telefone").value;
    var Form_cel1 = document.getElementById("cel1").value;
    var Form_cel2 = document.getElementById("cel2").value;

    // Storing data:

    myObj = {
        nome: Form_nome,
        email: Form_email,
        cpf: Form_cpf,
        crm: Form_crm,
        dtNasc: Form_dtnasc,
        cartId: Form_cartid,
        orgao: Form_orgao,
        estadoEm: Form_estadoEm,
        estadoMo: Form_estadoMo,
        cidade: Form_cidade,
        cep: Form_cep,
        bairro: Form_bairro,
        endereco: Form_endereco,
        tel: Form_tel,
        cel1: Form_cel1,
        cel2: Form_cel2
    };

    if (validaForm(myObj)) {

        myJSON = JSON.stringify(myObj);
        localStorage.setItem("FormJSON", myJSON);

        window.location.href = "./sword.html";
    }

}


function validaForm(frm) {


    if (frm.nome == null || frm.nome.length < 6) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, indique o seu NOME corretamente");
        //Foi definido um focus no campo.
        document.getElementById("nome").focus();
        //o form não é enviado.
        return false;
    }

    //o campo e-mail precisa de conter: "@", "." e não pode estar vazio

    if (frm.email.indexOf("@") == -1 || frm.email.indexOf(".") == -1 || frm.email.length < 6 || frm.email == null) {
        alert("Por favor, indique um e-mail válido.");
        document.getElementById("email").focus();
        return false;
    }

    if (frm.cpf.length < 14 || frm.cpf.indexOf("-") == -1 || frm.cpf.indexOf(".") == -1) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, digite corretamente seu CPF. \nInsira os  \" . \"  e o \" - \" para que o seu numero de CPF fique da forma indicada. \nEx.: 123.123.123-12");
        //Foi definido um focus no campo.
        document.getElementById("cpf").focus();
        //o form não é enviado.
        return false;
    }

    if (frm.crm == ' ' || frm.crm == null || frm.crm.length < 4) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, indique o seu CRM/RN corretamente.");
        //Foi definido um focus no campo.
        document.getElementById("crm").focus();
        //o form não é enviado.
        return false;
    }


    if (frm.dtNasc == ' ' || frm.dtNasc == null || frm.dtNasc.length < 10) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, informe corretamente a sua data de nascimento.");
        //Foi definido um focus no campo.
        document.getElementById("dtnasc").focus();
        //o form não é enviado.
        return false;
    }


    if (frm.cartId == ' ' || frm.cartId == null || frm.cartId.length < 3) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, indique o número correto da sua Caterteira de Identidade. \nEx.: 123.123.123");
        //Foi definido um focus no campo.
        document.getElementById("cartid").focus();
        //o form não é enviado.
        return false;
    }

    if (frm.orgao == ' ' || frm.orgao == null || frm.orgao.length < 1) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, informe o orgão emissor da carteira de identidade. \nEx.: SSP");
        //Foi definido um focus no campo.
        document.getElementById("orgao").focus();
        //o form não é enviado.
        return false;
    }

    if (frm.estadoEm == '' || frm.estadoEm == null) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, informe o estado onde sua carteira de identidade foi emitida.");
        //Foi definido um focus no campo.
        document.getElementById("estadoEm").focus();
        //o form não é enviado.
        return false;
    }

    if (frm.estadoMo == '' || frm.estadoMo == null) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, informe o estado onde você mora atualmente.");
        //Foi definido um focus no campo.
        document.getElementById("estadoMo").focus();
        //o form não é enviado.
        return false;
    }

    if (frm.cidade == ' ' || frm.cidade == null || frm.cidade.length < 2) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, indique o seu nome corretamente");
        //Foi definido um focus no campo.
        document.getElementById("cidade").focus();
        //o form não é enviado.
        return false;
    }

    if (frm.cep == ' ' || frm.cep == null || frm.cep.length < 9) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, verifique se o CEP esta digitado no padrão necessario. \nEx.: 59300-000");
        //Foi definido um focus no campo.
        document.getElementById("cep").focus();
        //o form não é enviado.
        return false;
    }

    if (frm.bairro == "" || frm.bairro == null || frm.cep.length < 2) {
        alert("Por favor, Informe o bairro onde mora.");
        document.getElementById("bairro").focus();
        return false;
    }

    if (frm.endereco == "" || frm.endereco == null || frm.endereco.length < 3) {
        alert("Por favor, Informe endereço corretamente.");
        document.getElementById("endereco").focus();
        return false;
    }

    if (frm.tel == "" || frm.tel == null || frm.tel.length < 13 || frm.tel.indexOf("(") == -1 || frm.tel.indexOf(")") == -1) {
        alert("Por favor, Indorme seu telefone corretamene. \nEx.: (84) 98765-4321");
        document.getElementById("telefone").focus();
        return false;
    }

    return true;


}
