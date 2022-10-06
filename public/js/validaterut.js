
function encrypt(parametro) {
    var text = parametro
    var secret = 'dvVt.20ENC.cl'
    var encrypted = CryptoJS.AES.encrypt(text, secret)
    encrypted = encrypted.toString()
    return encrypted
}

$(document).ready(function () {
    $("#rut_form").val("")
    $('.close-huincha').click(function (e) {
        e.preventDefault()
        $('.huincha-top').remove()
    })
    $('#enviar_form').click(function (e) {
        e.preventDefault()
        let rut = $('#rut_form').val()
        let dv = rut.substr(rut.length - 1, 1).toUpperCase()
        let rut_num = rut.replace(/\.|,|-/, '')
        rut_num = rut_num.substr(0, rut_num.length - 1).toUpperCase()
        let encrypted = encrypt(`rut_usuario=${rut_num}&rut_dv=${dv}&origen=APP2`)
        $('#crypt').val(encrypted)
        $("#form_login").submit();
    })
    $('#form_login').validate({
        rules: {
            rut_form: {required: true, minlength: 8, valrut: $('#rut_form').val()}
        }, submitHandler: function (form) {
            var url = 'inc/func.savedata.php'
            $.ajax({
                url: url,
                type: 'post',
                dataType: 'json',
                data: $('#form_login').serialize(),
                success: function (data) {
                    if (data.status == true) {
                        location.href = data.msg;
                    } else if (data.status == false && data.msg == 'error_captcha') {
                        $('#msg-captcha').removeClass('d-none').addClass('d-block')
                    }
                }
            })
            return false
        }, unhighlight: function (element) {
            $('.wom-input-container').removeClass('input-invalid')
            $('.wom-input-container').addClass('input-valid')
        }, errorPlacement: function (error, element) {
            $('.wom-input-container').removeClass('input-valid')
            $('.wom-input-container').addClass('input-invalid')
        }
    })
})

function letrasRut(e) {
    tecla = (document.all) ? e.keyCode : e.which
    if (tecla == 8 || tecla == 107 || tecla == 75) return true
    patron = /\d/
    te = String.fromCharCode(tecla)
    return patron.test(te)
}

$.validator.addMethod(
    'valrut',
    function (rutvalue) {
        return validarut(rutvalue)
    },
    'Rut incorrecto'
)

function validarut(rut) {
    if (rut.length < 9)
        return (false)
    i1 = rut.indexOf('-')
    dv = rut.substr(i1 + 1)
    dv = dv.toUpperCase()
    nu = rut.substr(0, i1)
    cnt = 0
    suma = 0
    for (i = nu.length - 1; i >= 0; i--) {
        dig = nu.substr(i, 1)
        fc = cnt + 2
        suma += parseInt(dig) * fc
        cnt = (cnt + 1) % 6
    }
    dvok = 11 - (suma % 11)
    if (dvok == 11) dvokstr = '0'
    if (dvok == 10) dvokstr = 'K'
    if ((dvok != 11) && (dvok != 10)) dvokstr = '' + dvok
    if (dvokstr == dv)
        return (true)
    else
        return (false)
}

function formato_rut(texto, activo) {
    var invertido = ''
    var dtexto = ''
    var cnt = 0
    var i = 0
    var j = 0
    var largo = ''
    if (activo) {
        texto = formato_rut(texto, false)
        largo = texto.length
        for (i = (largo - 1), j = 0; i >= 0; i--, j++)
            invertido = invertido + texto.charAt(i)
        dtexto = dtexto + invertido.charAt(0)
        dtexto = dtexto + '-'
        for (i = 1, j = 2; i < largo; i++, j++) {
            if (cnt == 3) {
                dtexto = dtexto + ''
                j++
                dtexto = dtexto + invertido.charAt(i)
                cnt = 1
            } else {
                dtexto = dtexto + invertido.charAt(i)
                cnt++
            }
        }
        invertido = ''
        for (i = (dtexto.length - 1), j = 0; i >= 0; i--, j++)
            invertido = invertido + dtexto.charAt(i)
        if (invertido == '-') invertido = ''
        texto = invertido
    } else {
        var tmpstr = ''
        for (i = 0; i < texto.length; i++)
            if (texto.charAt(i) != ' ' && texto.charAt(i) != '.' && texto.charAt(i) != '-')
                tmpstr = tmpstr + texto.charAt(i)
        texto = tmpstr
    }
    return texto
}
