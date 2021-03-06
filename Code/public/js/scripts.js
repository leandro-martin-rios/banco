function redirectButtons(boton) {
    const btnRedirect = document.getElementById(boton);

    btnRedirect.addEventListener('click',() => {
        window.location.href = `operations.php?${boton}`;
    })
}

redirectButtons("deposit");
redirectButtons("extract");
redirectButtons("send");
redirectButtons("changeArs");
redirectButtons("changeUsd");

document.getElementById('transactionHistory').addEventListener('click', () => {
    window.location.href = 'transactionsHistory.php';
})