$(function () {
    let url = new URL(window.location.href)
    let msgSucesso = url.searchParams.get("msgSucesso")
    let msgFalha = url.searchParams.get("msgFalha")
    
    if (msgSucesso) {
        $('#div-msg-sucesso').removeClass('invisible').text(msgSucesso)
        return    
    }
    
    if (msgFalha) {
        $('#div-msg-falha').removeClass('invisible').text(msgFalha)
        return
    }
})