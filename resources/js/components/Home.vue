<template>
  <div class="articles-list">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 my-3">
          <ArticleCard v-for="article in articles" :key="article.id" :article="article"></ArticleCard>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { HTTP } from "@/js/http-common";
import ArticleCard from "@/js/components/ArticleCard";

export default {
  components: {
    ArticleCard
  },
  data() {
    return {
      articles: []
    };
  },
  methods: {
    getArticles() {
      HTTP.get("feed")
        .then(result => {
          this.articles = result.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  },
  created() {
    this.getArticles();
  }
};
</script>
