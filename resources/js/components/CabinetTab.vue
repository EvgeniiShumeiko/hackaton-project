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
      <table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">Урок</th>
            <th scope="col">Задание</th>
           
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Физика</td>
            <td><a href="/homework/2/1">Открыть задание</a>  </td>
          </tr>
          <tr>
            <td>Математика</td>
            <td><a href="/homework/2/1">Открыть задание</a>  </td>
          </tr>
          <tr>
           <td>Русский язык</td>
            <td><a href="/homework/2/1">Открыть задание</a>  </td>
          </tr>
        </tbody>
      </table>
</el-tab-pane>
    <el-tab-pane label="Личные данные" name="second">Config</el-tab-pane>
    <el-tab-pane label="Электронные учебники" name="third">Role</el-tab-pane>
  </el-tabs>
</template>

<script>
export default {
  props: ['home','qrcode'],
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
