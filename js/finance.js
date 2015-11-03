jQuery('.dateformat').keyup(function () {
    this.value = this.value.replace(/[^0-9\.\/]/g,'');
    if(this.value.length == 2 || this.value.length == 5){
        this.value = this.value + "/";
    }
});