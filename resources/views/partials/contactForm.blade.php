<div class="alert alert-success" role="alert" id="success-alert-box" style="display: none">
    <div class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
            aria-label="Warning:">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </svg>
        <div class="ml-4" id="success-alert-message"></div>
    </div>
</div>

<div class="alert alert-danger" role="alert" id="danger-alert-box" style="display: none">
    <div class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
            aria-label="Warning:">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
        <div class="ml-4" id="danger-alert-message"></div>
    </div>
</div>

<form method="POST" action="{{ route('send-email') }}" id="contact-form">
    @csrf
    <div class="form-field-row">
        <div class="row-2-modal">
            <input type="text" name="name" class="wpcf7-text wpcf7-validates-as-required input-form"
                placeholder="&nbsp;" required>
            <label for="name" class="label-form">Name</label>
        </div>

        <div class="row-2-modal">
            <input type="email" name="email"
                class="wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-form"
                placeholder="&nbsp;" required>
            <label for="tel" class="label-form">
                eMail
            </label>
        </div>
    </div>

    <div class="form-field-row">
        <div class="row-2-modal">
            <input type="text" name="telephone" class="wpcf7-text wpcf7-validates-as-required input-form"
                placeholder="&nbsp;" required>
            <label for="name" class="label-form">Telefon</label>
        </div>

        <div class="row-2-modal">
            <input type="tel" name="address"
                class="wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel input-form"
                placeholder="&nbsp;" required>
            <label for="tel" class="label-form">
                Adresse
            </label>
        </div>
    </div>

    <div class="textarea-box">
        <textarea name="message" cols="40" rows="10" class="wpcf7-textarea input-form" id="textarea"
            aria-invalid="false" placeholder="&nbsp;" required></textarea>
        <label for="textarea" class="label-form">
            Beschreibung
        </label>
    </div>

    <div class="element-center">
        <input type="submit" value="Nachricht absenden" class="contact-submit-button" id="contact-form-button">
    </div>
</form>
