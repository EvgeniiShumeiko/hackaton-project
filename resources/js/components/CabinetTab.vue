<template>
  <el-tabs v-model="activeName" @tab-click="handleClick">
    <el-tab-pane label="Домашнее задание" name="first">
      <el-upload
        class="upload-demo"
        action="https://jsonplaceholder.typicode.com/posts/"
        :on-preview="handlePreview"
        :on-remove="handleRemove"
        :before-remove="beforeRemove"
        multiple
        :limit="3"
        :on-exceed="handleExceed"
        :file-list="fileList">
        <el-button size="small" type="primary" plain>Загрузить изображение</el-button>
        <div slot="tip" class="el-upload__tip">jpg/png максимальный размер файлов 500Кб</div>
      </el-upload>
     <el-button type="primary" plain>Загрузить изображение</el-button>
     <el-button type="primary" plain>Сделать фото</el-button>

    </el-tab-pane>
    <el-tab-pane label="Личные данные" name="second">Config</el-tab-pane>
    <el-tab-pane label="Электронные учебники" name="third">Role</el-tab-pane>
  </el-tabs>
</template>

<script>
export default {
  data() {
    return {
       activeName: 'first'
    };
  },
  methods: {
      handleClick(tab, event) {
        console.log(tab, event);
      },
      handleRemove(file, fileList) {
        console.log(file, fileList);
      },
      handlePreview(file) {
        console.log(file);
      },
      handleExceed(files, fileList) {
        this.$message.warning(`The limit is 3, you selected ${files.length} files this time, add up to ${files.length + fileList.length} totally`);
      },
      beforeRemove(file, fileList) {
        return this.$confirm(`Cancel the transfert of ${ file.name } ?`);
      }
    },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
