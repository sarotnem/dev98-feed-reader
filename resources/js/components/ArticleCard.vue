<template>
  <div class="card text-center">
    <div class="card-body">
      <h4 class="card-title mb-1">{{article.title}}</h4>
      <h6 class="card-subtitle mb-3 text-muted">Posted by {{article.author}}, {{article.date}}</h6>
      <p v-html="article.description" class="card-text"></p>
      <router-link :to="{ name: 'article', params: { id: article.id, article: article }}" class="btn btn-primary">READ MORE</router-link>
    </div>
  </div>
</template>

<script>
export default {
    props: ['article']
};
</script>
