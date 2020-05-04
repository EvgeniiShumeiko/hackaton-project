<template>
  <el-tabs v-model="activeName" @tab-click="handleClick">
        <el-tab-pane label="Домашнее задание" name="first">
            <div class="block">
        <span class="demonstration">Выберите дату</span>
        <el-date-picker
          v-model="value1"
          type="date"
          placeholder="Выберите дату">
        </el-date-picker>
      </div>
        <el-collapse v-model="activeNames" class="mt-2" >
      <el-collapse-item title="Математика" name="1">
        <div class="p-3">
        <div>Страница 50, упражнение 9, выучить формулы 5, 6</div>
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
            <br>
            <p>Уникальный QR-код для этого задания</p>
            <el-image
              style="width: 150px;"
              src="/img/qr88578761.png"
              fit="fit"></el-image>
              <br>
            <el-link type="primary">Загрузить изображение</el-link>
            <el-link type="primary">Сделать фото</el-link>
            
          </el-upload>
          </div>
      </el-collapse-item>
      <el-collapse-item title="Русский язык" name="2">
        <div class="p-3">
        <div>Страница 50, упражнение 9, выучить формулы 5, 6</div>
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
            <br>
             <p>Уникальный QR-код для этого задания</p>
            <el-image
              style="width: 150px;"
              src="/img/qr88578761.png"
              fit="fit"></el-image>
              <br>
            <el-link type="primary">Загрузить изображение</el-link>
            <el-link type="primary">Сделать фото</el-link>
          </el-upload>
          </div>
      </el-collapse-item>
      <el-collapse-item title="История" name="3">
        <div class="p-3">
        <div>Страница 50, упражнение 9, выучить формулы 5, 6</div>
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
            <br>
             <p>Уникальный QR-код для этого задания</p>
            <el-image
              style="width: 150px;"
              src="/img/qr88578761.png"
              fit="fit"></el-image>
              <br>
            <el-link type="primary">Загрузить изображение</el-link>
            <el-link type="primary">Сделать фото</el-link>
          </el-upload>
          </div>
      </el-collapse-item>
      <el-collapse-item title="Обществознание" name="4">
        <div class="p-3">
          <div>Страница 50, упражнение 9, выучить формулы 5, 6</div>
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
              <br>
               <p>Уникальный QR-код для этого задания</p>
            <el-image
              style="width: 150px;"
              src="/img/qr88578761.png"
              fit="fit"></el-image>
              <br>
              <el-link type="primary">Загрузить изображение</el-link>
              <el-link type="primary">Сделать фото</el-link>
            </el-upload>
          </div>
      </el-collapse-item>
    </el-collapse>
</el-tab-pane>
    <el-tab-pane label="Личные данные" name="second">Config</el-tab-pane>
    <el-tab-pane label="Электронные учебники" name="third">Role</el-tab-pane>
  </el-tabs>
</template>

<script>
export default {
  data() {
    return {
       activeName: 'first',
       fileList: [],
       activeNames: ['1'],
      pickerOptions: {
          disabledDate(time) {
            return time.getTime() > Date.now();
          },
          shortcuts: [{
            text: 'Today',
            onClick(picker) {
              picker.$emit('pick', new Date());
            }
          }, {
            text: 'Yesterday',
            onClick(picker) {
              const date = new Date();
              date.setTime(date.getTime() - 3600 * 1000 * 24);
              picker.$emit('pick', date);
            }
          }, {
            text: 'A week ago',
            onClick(picker) {
              const date = new Date();
              date.setTime(date.getTime() - 3600 * 1000 * 24 * 7);
              picker.$emit('pick', date);
            }
          }]
        },
        value1: '',
        value2: '',
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
