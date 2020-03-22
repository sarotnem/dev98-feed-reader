<template>
  <div>
    <nav class="navbar navbar-expand-lg bg-info">
      <div class="container">
        <router-link to="/" class="navbar-brand">dev98 Feed Reader</router-link>
      </div>
    </nav>
    <router-view></router-view>
    <footer class="footer footer-white">
      <div class="container">
        <div class="row">
          <div class="credits ml-auto">
            <span class="copyright">
              Made by Kyriakos Karpouzis for netz98 Developer Sample Task
            </span>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
export default {};
</script>
