  <template>
  <el-table :data="tableData" style="width: 100%">
    <el-table-column prop="name" label="Имя" width="180"></el-table-column>
    <el-table-column prop="work" label="Работа"></el-table-column>
  </el-table>
</template>

<script>
export default {
  data() {
    return {
      tableData: [
        {
          name: "Никитин Алексей",
          work: "Посмотреть работу"
        },
        {
          name: "Евгений Шумейко",
          work: "Посмотреть работу"
        },
        {
          name: "Богданов Егор",
          work: "Посмотреть работу"
        },
        {
          name: "Обухов Иван",
          work: "Посмотреть работу"
        }
      ]
    };
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
