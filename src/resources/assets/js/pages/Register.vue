<template>
  <div>
    <message-title :message="message"/>
    <register-form/>
  </div>
</template>

<script>
import MessageTitle from "../components/MessageTitle";
import RegisterForm from "../components/RegisterForm";
export default {
  data() {
    return {
      message: "新規登録"
    };
  },
  components: {
    MessageTitle,
    RegisterForm
  }
};
</script>

