<!-- image
がっこう寄付総合支援サイト【きふるか】
マイページ
ログイン
新規登録 -->

<template>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <router-link
        to="/"
        role="button"
        aria-label="menu"
        aria-expanded="false"
        class="navbar-item brand"
      >
        <p class="title is-4">Kids Weekend</p>
      </router-link>

      <a
        role="button"
        class="navbar-burger burger"
        aria-label="menu"
        aria-expanded="false"
        @click.prevent="showUserMenuPanel"
      >
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>

      <slideout-panel></slideout-panel>
    </div>

    <div class="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item">
          <div v-if="!isLoggedIn" class="buttons">
            <router-link to="/register" class="button btn-expand btn-register">
              <strong class="has-text-white">登録する</strong>
            </router-link>
            <router-link to="/login" class="button btn-expand btn-login">
              <strong class="has-text-white">ログイン</strong>
            </router-link>
          </div>
          <div v-else class="buttons is-hidden-mobile">
            <div class="dropdown is-right" :class="{ 'is-active': dropdownActive }">
              <div class="dropdown-trigger">
                <button
                  class="button btn-dropdown is-light"
                  aria-haspopup="true"
                  aria-controls="dropdown-menu"
                  @click.prevent="dropdownToggle"
                >
                  <span>{{ user.name }}</span>
                  <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </div>
              <div class="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <a class="dropdown-item">
                    <p>
                      <strong>Sign in as</strong>
                    </p>@kidsweekend
                  </a>
                  <hr class="dropdown-divider">
                  <router-link to="/users" class="dropdown-item">プロフィールを編集する</router-link>
                  <a class="dropdown-item">予約中のアクティビティ</a>
                  <a class="dropdown-item">アカウントの設定</a>
                  <hr class="dropdown-divider">
                  <a class="dropdown-item">ヘルプ</a>
                  <a class="dropdown-item" @click.prevent="logoutModalToggle">ログアウト</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <template>
        <logout-modal
          v-if="showLogoutModal"
          :action="handleLogout"
          :showLogoutModal="showLogoutModal"
          @close="logoutModalToggle"
        ></logout-modal>

        <drop-down v-if="showDropDown" :action="handle"></drop-down>
      </template>
    </div>
  </nav>
</template>

<script>
import LogoutModal from "./LogoutModal";
import DropDown from "./DropDown";
import { mapActions, mapGetters } from "vuex";

export default {
  components: {
    LogoutModal,
    DropDown
  },
  data() {
    return {
      userMenu: {
        openOn: "right",
        maxWidth: 275
      },
      userMenuActive: false,
      dropdownActive: false,
      showLogoutModal: false,
      showDropDown: false
    };
  },
  computed: {
    ...mapGetters({
      user: "user/user",
      isLoggedIn: "user/isLoggedIn"
    })
  },
  methods: {
    ...mapActions({
      logout: "user/logout"
    }),
    async handleLogout() {
      await this.logoutModalToggle();
      this.logout();
      this.$router.push("/");
    },
    showUserMenuPanel() {
      const panel = this.$showPanel({
        component: "UserMenu",
        cssClass: "UserMenu",
        openOn: this.userMenu.openOn,
        width: this.userMenu.maxWidth,
        props: {}
      });
    },
    userMenuActiveToggle() {
      this.mobileMenuActive = !this.userMenuActive;
    },
    dropdownToggle() {
      this.dropdownActive = !this.dropdownActive;
    },
    logoutModalToggle() {
      this.showLogoutModal = !this.showLogoutModal;
    },
    dropDownToggle() {
      this.showDropDown = !this.showDropDown;
    }
  }
};
</script>

<style scoped>
.brand {
  display: flex;
  font-size: 18px;
  font-weight: bold;
  padding-right: 8px;
}

.button.btn-register {
  background-color: #03cea4;
}

.button.btn-login {
  background-color: #57b8ff;
}

.button.btn-logout {
  background-color: #ef767a;
}

.btn-expand {
  border: none;
}

.btn-dropdown {
  border: none;
}
</style>