<template>
  <header class="py-6 px-8 mb-8 hero-header">
    <h1 class="text-4xl font-extrabold font-sans">Laravel</h1>
  </header>
  <div class="container px-8 pb-10">
    <main class="flex">
      <aside class="w-1/5 pt-10">
        <section class="mb-10">
          <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
          <ul>
            <li class="text-sm leading-10">
              <router-link :to="{name:'logo'}">Logo</router-link>
            </li>
            <li class="text-sm leading-10">
              <router-link :to="{name:'logo-symbol'}">Logo Symbol</router-link>
            </li>
            <li class="text-sm leading-10">
              <router-link :to="{name:'colors'}">Colors</router-link>
            </li>
            <li class="text-sm leading-10">
              <router-link :to="{name:'typography'}">Typography</router-link>
            </li>
          </ul>
        </section>

        <section class="mb-10">
          <h5 class="uppercase font-bold mb-5 text-base">The Doodles</h5>

          <ul>
            <li class="text-sm leading-10">
              <router-link :to="{name:'mascot'}">Mascot</router-link>
            </li>
            <li class="text-sm leading-10">
              <router-link :to="{name:'illustrations'}">Illustrations</router-link>
            </li>
             <li class="text-sm leading-10">
              <router-link :to="{name:'loaders-and-animations'}">Loaders & Animations</router-link>
            </li>
            <li class="text-sm leading-10">
              <router-link :to="{name:'wallpapers'}">Wallpapers</router-link>
            </li>
          </ul>
        </section>

        <section>
        <h5 class="uppercase font-bold mb-5 text-base">Stats</h5>

        <ul>
          <li class="text-sm leading-10">
            <router-link :to="{name:'site-stats'}">Site Stats</router-link>
          </li>
        </ul>
      </section>
      </aside>

      <div class="primary flex-1">
        <router-view />
      </div>
    </main>
  </div>
</template>

<script setup>
// no JS needed here for now
</script>

<style scoped>
.hero-header {
  background: url('./images/logo.svg') no-repeat -30px 3px;
  background-size: contain;
}
</style>
