<template>
  <section>
    <div class="container">
      <div class="field is-horizontal">
        <div class="field-label is-normal"> <label class="label">From</label> </div>
        <div class="field-body">
          <div class="field">
            <p class="control is-expanded has-icons-left"> <input class="input" type="text" placeholder="Name"> <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span> 
            </p>
          </div>
          <div class="field">
            <p class="control is-expanded has-icons-left has-icons-right"> <input class="input is-success" type="email" placeholder="Email" value="alex@smith.com"> <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span> <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                  </span> 
            </p>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label"></div>
        <div class="field-body">
          <div class="field is-expanded">
            <div class="field has-addons">
              <p class="control"> <a class="button is-static">
                      +44
                    </a> 
              </p>
              <p class="control is-expanded"> <input class="input" type="tel" placeholder="Your phone number"> </p>
            </div>
            <p class="help">Do not enter the first zero</p>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal"> <label class="label">Department</label> </div>
        <div class="field-body">
          <div class="field is-narrow">
            <div class="control">
              <div class="select is-fullwidth"> <select>
                      <option>Business development</option>
                      <option>Marketing</option>
                      <option>Sales</option>
                    </select> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label"> <label class="label">Already a member?</label> </div>
        <div class="field-body">
          <div class="field is-narrow">
            <div class="control"> <label class="radio">
                    <input type="radio" name="member">
                    Yes
                  </label> <label class="radio">
                    <input type="radio" name="member">
                    No
                  </label> 
            </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal"> <label class="label">Subject</label> </div>
        <div class="field-body">
          <div class="field">
            <div class="control"> <input class="input is-danger" type="text" placeholder="e.g. Partnership opportunity"> </div>
            <p class="help is-danger"> This field is required </p>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal"> <label class="label">Question</label> </div>
        <div class="field-body">
          <div class="field">
            <div class="control"> <textarea class="textarea" placeholder="Explain how we can help you"></textarea> </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label">
          <!-- Left empty for spacing -->
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control"> <button class="button is-primary">
                    Send message
                  </button> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import DonationImg from "../../images/donation/d_kin_rag_top.jpg";
export default {
  data() {
    return {
      DonationImg
    };
  }
};
</script>

<style lang="scss" scoped>
section {
  padding-top: 63px;

  .container {
    max-width: 1160px;

    .donation-title {
      margin-top: 32px;

      h1 {
        font-weight: bold;
        font-size: 2rem;
      }
    }
  }

  .child-flame {
    .donaition-text-flame {
      margin-top: 16px;
      font-size: 1.3rem;

      h1 {
        font-size: 2rem;
        font-weight: bold;
        padding-bottom: 24px;
      }
      h2 {
        font-size: 1rem;
        font-weight: bold;
        padding-bottom: 16px;
      }

      p {
        padding-bottom: 32px;
      }
    }

    .donaition-img-flame {
      margin-top: 32px;
    }
  }
  .top-right-flame {
    margin-top: 32px;
    // background-color: aqua;
    // padding: 16px;

    .top-title {
      font-size: 1.6rem;
    }
    .top-contents {
      font-weight: bold;
      font-size: 3rem;
      text-align: right;
    }
    .top-subtitle {
      font-weight: bold;
      font-size: 1.8rem;
      text-align: right;
      .top-contents-data {
        font-weight: bold;
        font-size: 3rem;
      }
    }
  }
}

.cart-gray{
  background: #EDEDED;
  margin-top: 5%;
  padding: 5%;
}
.remarks{
  margin-top: 5%;
}

.custom-btn {
  background-color: #ffe035;
  color: rgb(0, 0, 0);
  font-size: 1rem;
  border-radius: 2em;
  width: 6.3em;
  padding: 0 4em;
  margin-left: 0.5em; 
  border-color: #ffe035;
}

.field-label{
  text-align: left;
  margin-right: 0rem; 
}
.label{
    font-size: 0.8rem;
    font-weight: normal;
}
.radio-text{
  font-size: 0.8rem;
}
.control1{
  margin-left: 40%;
}

</style>
