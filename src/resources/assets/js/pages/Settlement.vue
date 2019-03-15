<template>
  <div>
    <settlement-top/>
    <settlement-form/>
    <school-sub-info/>
  </div>
</template>

<script>
import SettlementTop from "../components/SettlementTop";
import SettlementForm from "../components/SettlementForm";
import SchoolSubInfo from "../components/SchoolSubInfo";
export default {
  components: {
    SettlementTop,
    SettlementForm,
    SchoolSubInfo
  }
};
</script>

<style>
</style>
