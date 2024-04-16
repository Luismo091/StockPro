"use strict";

var KTSigninGeneral = function () {
    var form, submitBtn, validation;

    return {
        init: function () {
            form = document.querySelector("#kt_sign_in_form");
            submitBtn = document.querySelector("#kt_sign_in_submit");

            validation = FormValidation.formValidation(form, {
                fields: {
                    email: {
                        validators: {
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: "El valor no es una dirección de correo electrónico válida"
                            },
                            notEmpty: {
                                message: "La dirección de correo electrónico es obligatoria"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "La contraseña es obligatoria"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            });

            submitBtn.addEventListener("click", function (event) {
                event.preventDefault();
                validation.validate().then(function (status) {
                    if (status === "Valid") {
                        submitBtn.setAttribute("data-kt-indicator", "on");
                        submitBtn.disabled = true;

                        // Realizar la solicitud AJAX con Axios
                        axios.post(form.getAttribute("action"), new FormData(form))
                            .then(function (response) {
                                if (response.data && response.data.status === "OK") {
                                    form.reset();
                                    Swal.fire({
                                        text: "Has iniciado sesión correctamente",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, entendido",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    }).then(function (result) {
                                        if (result.isConfirmed) {
                                            var redirectUrl = form.getAttribute("data-kt-redirect-url");
                                            if (redirectUrl) {
                                                location.href = redirectUrl;
                                            }
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        text: "Lo siento, el correo electrónico o la contraseña son incorrectos. Por favor, inténtalo de nuevo.",
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, entendido",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    });
                                }
                            })
                            .catch(function (error) {
                                Swal.fire({
                                    text: "Lo siento, parece que hay algunos errores detectados. Por favor, inténtalo de nuevo.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, entendido",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            })
                            .then(function () {
                                submitBtn.removeAttribute("data-kt-indicator");
                                submitBtn.disabled = false;
                            });
                    } else {
                        Swal.fire({
                            text: "Lo siento, parece que hay algunos errores detectados. Por favor, inténtalo de nuevo.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, entendido",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            });
        }
    };
}();

KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
