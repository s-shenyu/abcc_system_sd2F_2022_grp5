new Vue({
    el: '#signinform',
    data() {
        return {
            mail: '',
            pass: '',
            pass2: '',
            err: 0,
            type: "primary"
        };
    },
    computed: {
        isEmail() {
            const regex = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i)
            const isErr = !regex.test(this.mail) && this.mail!='';
            if(isErr==true) this.err+=1;
            return isErr;
        },
        isPass() {
            const isErr = this.pass.length < 6 && this.pass!='';
            if(isErr==true) this.err+=1;
            return isErr;
        },
        isSamePass() {
            const isErr = this.pass2!=this.pass && this.pass2!='';
            if(isErr==true) this.err+=1;
            return isErr;
        }
    }
});