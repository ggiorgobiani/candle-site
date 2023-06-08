import { Controller } from '@hotwired/stimulus';


export default class extends Controller {
    connect() {
        this.fondantCard = this.element.querySelector('.fondantCard');
        this.fondantCard.addEventListener('click', (event) => {
            this.redirect(event);
        });
    }
    
    redirect() {
        
        window.location.href="{{ path('app_fondant_candle_show') }}";
    }



}