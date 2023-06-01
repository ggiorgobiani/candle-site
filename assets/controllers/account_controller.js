import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    connect() {
        this.loginForm = this.element.querySelector('#loginForm');
        this.regForm = this.element.querySelector('#regForm');
        this.indicator = this.element.querySelector('#indicator');
    }

    showLogin()
    {
        this.regForm.style.transform = "translateX(300px)";
        this.loginForm.style.transform = "translateX(300px)";
        this.indicator.style.transform = "translateX(0px)";
    }
    showReg()
    {
        this.regForm.style.transform = "translateX(0px)";
        this.loginForm.style.transform = "translateX(0px)";
        this.indicator.style.transform = "translateX(100px)";
    }

}
