<template>
  <el-tabs v-model="activeName" @tab-click="handleClick">
        <el-tab-pane label="Домашнее задание" name="first">
            <div class="block">
              <el-date-picker
                v-model="value1"
                type="date"
                placeholder="Выберите дату">
              </el-date-picker>
               <el-select v-model="value" placeholder="Выберите класс">
                <el-option
                  v-for="item in options"
                  :key="item.value"
                  :label="item.label"
                  :value="item.value">
                </el-option>
              </el-select>
              <el-button type="primary" class="mt-2 mb-2" round>Добавить домашнее задание</el-button>
            </div>
           <el-table
              :data="tableData"
              style="width: 100%">
              <el-table-column
                prop="date"
                label="Ученик"
                width="180">
              </el-table-column>
              <el-table-column
                prop="name"
                label="Задание"
                width="180">
              </el-table-column>
              <el-table-column
                prop="coin"
                label="Оценка"
                width="90">
              </el-table-column>
            </el-table>
</el-tab-pane>
    <el-tab-pane label="Личные данные" name="second">Config</el-tab-pane>
    <el-tab-pane label="Электронные учебники" name="third">Role</el-tab-pane>
  </el-tabs>
</template>

<script>
export default {
  props: [],
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
          label: '8 А'
        }, {
          value: 'Option2',
          label: '9 Б'
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
    console.log(this.homework);
  }
};
</script>
