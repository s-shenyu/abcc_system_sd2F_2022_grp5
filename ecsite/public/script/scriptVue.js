const signin = new Vue({
    el: '#signinform',
    data() {
        return {
            mail: '',
            pass: '',
            pass2: ''
        };
    },
    computed: {
        isEmail() {
            const regex = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i)
            const isErr = !regex.test(this.mail) && this.mail != '';
            return isErr;
        },
        isPass() {
            const isErr = this.pass.length < 6 && this.pass != '';
            return isErr;
        },
        isSamePass() {
            const isErr = this.pass2 != this.pass && this.pass2 != '';
            return isErr;
        },
        isAllOK() {
            const isNull = this.mail == '' || this.pass == '' || this.pass2 == '';
            const regex = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i)
            const isErrmail = !regex.test(this.mail) && this.mail != '';
            const isErrpass = this.pass.length < 6 && this.pass != '';
            const isErrpass2 = this.pass2 != this.pass && this.pass2 != '';
            const isErr = isErrmail || isErrpass || isErrpass2 || isNull;
            return isErr;
        }
    }
});