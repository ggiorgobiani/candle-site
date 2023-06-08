import { Controller } from '@hotwired/stimulus';


export default class extends Controller {
    connect() {
        this.pouredCard = this.element.querySelector('.pouredCard');
        this.pouredCard.addEventListener('click', (event) => {
            this.redirect(event);
        });
    }
    
    redirect() {
        
        window.location.href = `/poured/{id}`;
    }



}