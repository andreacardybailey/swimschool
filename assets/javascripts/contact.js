$( "#contact" ).validate({
  rules: {
    name: {
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