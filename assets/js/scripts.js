const formContatoRef = document.getElementById("form-contato")

async function onSubmit() {
    try {
        event.preventDefault()
        if (!formContatoRef.reportValidity()) return;

        const formData = new FormData(formContatoRef)
        const response = await fetch(formContatoRef.action, {
            method: 'POST',
            body: formData,
        })

        const data = await response.json()
        if (!response.ok) {
            alert(data?.message ?? "An unexpected error ocurred")
            return
        }

        formContatoRef.reset()
        document.querySelector("#form-contato-submit-success").style.visibility = "visible"
        // location.href = "/thank-you.php"
    } finally {
        grecaptcha.reset()
    }
}