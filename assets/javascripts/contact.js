$( "#contact" ).validate({
  rules: {
    fname: {
      required: true
    },
    lname: {
      required: true
    },
    email: {
      required: true,
      email: true
    },
    subject: {
      required: true
    },
    message: {
      required: true
    }
  }
});

$("#contact").validate();