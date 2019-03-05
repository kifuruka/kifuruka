<template>
  <div>
    <message-title :message="message"/>
    <login-form/>
  </div>
</template>

<script>
import MessageTitle from "../components/MessageTitle";
import LoginForm from "../components/LoginForm";
export default {
  data() {
    return {
      message: "ログイン"
    };
  },
  components: {
    MessageTitle,
    LoginForm
  }
};
</script>
