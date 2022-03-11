class Beiträge {
    static initialize() {
        Beiträge.instance = new Beiträge();
    }
    constructor() {
        this.text = document.getElementById("text");
        this.file = document.getElementById("fileupload");
        this.submit = document.getElementById("submit");
        this.cancel = document.getElementById("cancel");

        this.submit.addEventListener("submit", this.validating.bind(this));
        this.cancel.addEventListener("click", this.exit.bind(this));
    }

    exit(){

    }

    validating(){
        if (this.text.toString().length > 1000 ){
            alert("Die Textlänge ist zu lang")
        }
        for (var i = 0; i < this.firstname.toString().length; i++) {
            if (this.text.toString().charAt(i) == "<" || this.text.toString().charAt(i) == ">") {
                alert("keine Tags!");
                this.text.focus();
                return;
            }
        }
        if (this.file[0].size > 50000000){
            alert("file grösse zu gross")
            this.file.focus();
            return;
        }




    }

}
window.addEventListener("load", FormController.initialize);