<template>
  <el-tabs v-model="activeName" @tab-click="handleClick">
        <el-tab-pane label="Материалы уроков" name="first">
            <div class="block">
              <el-date-picker
                  v-model="value1"
                  type="date"
                  placeholder="Выберите дату">
                </el-date-picker>
              <el-select v-model="value1" placeholder="Выберите предмет">
                <el-option
                  v-for="item in predmet"
                  :key="item.value"
                  :label="item.label"
                  :value="item.value">
                </el-option>
                </el-select>
               <el-select v-model="value" placeholder="Выберите параллель">
                <el-option
                  v-for="item in options"
                  :key="item.value"
                  :label="item.label"
                  :value="item.value">
                </el-option>
              </el-select>
            </div>
            <div class="mt-3">
              <el-input class="mt-2" placeholder="Введите материал"></el-input>
              <el-input class="mt-2" placeholder="Введите материал"></el-input>
              <el-input class="mt-2" placeholder="Введите материал"></el-input>
              <el-input class="mt-2" placeholder="Введите материал"></el-input>
              <el-button type="primary" class="mt-2" plain>Добавить материал</el-button>
            </div>
            
    </el-tab-pane>
    <el-tab-pane label="Работа с расписанием" name="fourth">Role</el-tab-pane>
    <el-tab-pane label="Личные данные" name="second">ывыва</el-tab-pane>
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
       tableData: [{
            date: 'Никитин Алексей',
            name: 'Открыть задание',
            coin: '4'
          }, {
            date: 'Шумейко Евгений',
            name: 'Открыть задание',
            coin: '5'
          }, {
            date: 'Богданов Егор',
            name: 'Открыть задание',
            coin: 'выставить'
          }, {
            date: 'Обухов Иван',
            name: 'Открыть задание',
            coin: '5'
          }],
       options: [{
          value: 'Option1',
          label: '8'
        }, {
          value: 'Option2',
          label: '9'
        }],
        predmet: [{
          value: 'Option1',
          label: 'Математика'
        }, {
          value: 'Option2',
          label: 'Русский язык'
        }],
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
        value: 'Option1',
        value1: 'Option1',
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
