class SaludoPersonal extends HTMLElement {

    constructor(){
        super();

        this.attachShadow({ mode: "open" });

        this.shadowRoot.innerHTML = `
            <p>Hola, {{ nombre }}</p>
        `;


    }


    connectedCallback () {
        let nombre = this.getAttribute("nombre");

        if(nombre === null){
            nombre = "desconocido";
        }

        //guardamos el nombre para mostrarlo
        let saludo = this.shadowRoot.querySelector("p");

        saludo.textContent = "Hola, " + nombre;


    }




}

customElements.define("saludo-personal", SaludoPersonal);
