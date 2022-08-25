<template>
  <div>
      <!-- ict students -->

      <div class="row" >
        <h1 class="color bold  well carousel-search hidden-phone collapse in" data-toggle="collapse" data-target="#ict"  aria-expanded="true" style="margin: 40px 0; font-size: 30px">
          <i class="fa fa-user-graduate  color-black"> 
            </i>&nbsp;&nbsp;Information and Communication Technology<div class="expand_caret caret"></div>
        </h1>
        <div id="ict" class="collapse in">
          <div v-if="students.ict.year1[0]" >
            <h3 class="bold  color-black collapse in" data-toggle="collapse" data-target="#ict1"  aria-expanded="true" style="margin-top: 40px;">ICT Year 1&nbsp;&nbsp;<div class="expand_caret caret"></div></h3>
            <div id="ict1" class="collapse in">
                <studenttable
                    class="test-paper"                
                    :users="students.ict.year1"
                    :block="block"
                    :putAdmin="putAdmin"
                    :setUpdate="setUpdate"
                    :isTeacher="false"
                    
                ></studenttable>
            </div>
          </div>
          <div v-if="students.ict.year2[0]" >
              <h3 class="bold  color-black collapse in" data-toggle="collapse" data-target="#ict2"  aria-expanded="true" style="margin-top: 40px;">ICT Year 2&nbsp;&nbsp;<div class="expand_caret caret"></div></h3>
              <div class="collapse in" id="ict2">
                <studenttable 
                    class="test-paper"
                    :users="students.ict.year2"
                    :block="block"
                    :putAdmin="putAdmin"
                    :setUpdate="setUpdate"
                    :isTeacher="false"
                  
                ></studenttable>
              </div>
          </div>
          <div v-if="students.ict.year3[0]">
              <h3 class="bold  color-black collapse in" data-toggle="collapse" data-target="#ict3"  aria-expanded="true" style="margin-top: 40px;">ICT Year 3&nbsp;&nbsp;<div class="expand_caret caret"></div></h3>          
              <div class="collapse in" id="ict3">
                <studenttable 
                    class="test-paper"
                    :users="students.ict.year3"
                    :block="block"
                    :putAdmin="putAdmin"
                    :setUpdate="setUpdate"
                    :isTeacher="false"
                    
                ></studenttable>
              </div>
            </div>
            <div v-if="students.ict.year4[0]">
              <h3 class="bold  color-black collapse in" data-toggle="collapse" data-target="#ict4"  aria-expanded="true" style="margin-top: 40px;">ICT Year 4&nbsp;&nbsp;<div class="expand_caret caret"></div></h3>          
              <div class="collapse in" id="ict4">
                <studenttable 
                    class="test-paper"
                    :users="students.ict.year4"
                    :block="block"
                    :putAdmin="putAdmin"
                    :setUpdate="setUpdate"
                    :isTeacher="false"
                    
                ></studenttable>
              </div>
            </div>
            <div v-if="students.ict.year5[0]">
              <h3  class="bold  color-black collapse in" data-toggle="collapse" data-target="#ict5"  aria-expanded="true" style="margin-top: 40px;">ICT Year 5&nbsp;&nbsp;<div class="expand_caret caret"></div></h3>          
              <div class="collapse in" id="ict5" >
                <studenttable 
                    class="test-paper"
                    :users="students.ict.year5"
                    :block="block"
                    :putAdmin="putAdmin"
                    :setUpdate="setUpdate"
                    :isTeacher="false"
                    
                ></studenttable>
              </div>
          </div>
        </div>
      </div>
      <!-- end ICT -->

      <!-- FCS students -->
      <div class="row" >
        <h1 class="color bold  well carousel-search hidden-phone collapse in" data-toggle="collapse" data-target="#fcs"  aria-expanded="true" style="margin: 40px 0; font-size: 30px">
          <i class="fa fa-user-graduate color-black"> 
            </i>&nbsp;&nbsp;Fundamental Computer Science<div class="expand_caret caret"></div>
        </h1>
        <div id="fcs" class="collapse in">
          <div class="collapse in" id="fcs1" v-if="students.fcs.year1[0]">
            <h3 class="bold  color-black collapse in" data-toggle="collapse" data-target="#fcs1"  aria-expanded="true" style="margin-top: 40px;">FCS Year 1&nbsp;&nbsp;<div class="expand_caret caret"></div></h3>          
              <studenttable
                  class="test-paper"                
                  :users="students.fcs.year1"
                  :block="block"
                  :putAdmin="putAdmin"
                  :setUpdate="setUpdate"
                  :isTeacher="false"
                  
              ></studenttable>
          </div>
          <div class="collapse in" id="fcs2" v-if="students.fcs.year2[0]">
            <h3 class="bold  color-black collapse in" data-toggle="collapse" data-target="#fcs2"  aria-expanded="true" style="margin-top: 40px;">FCS Year 2&nbsp;&nbsp;<div class="expand_caret caret"></div></h3>          
              <studenttable 
                  class="test-paper"
                  :users="students.fcs.year2"
                  :block="block"
                  :putAdmin="putAdmin"
                  :setUpdate="setUpdate"
                  :isTeacher="false"
                  
              ></studenttable>
          </div>
          <div class="collapse in" id="fcs3" v-if="students.fcs.year3[0]">
            <h3 class="bold  color-black collapse in" data-toggle="collapse" data-target="#fcs3"  aria-expanded="true" style="margin-top: 40px;">FCS Year 3&nbsp;&nbsp;<div class="expand_caret caret"></div></h3>          
              <studenttable 
                  class="test-paper"
                  :users="students.fcs.year3"
                  :block="block"
                  :putAdmin="putAdmin"
                  :setUpdate="setUpdate"
                  :isTeacher="false"
                  
              ></studenttable>
          </div>
          <div class="collapse in" id="fcs4" v-if="students.fcs.year4[0]">
            <h3 class="bold  color-black collapse in" data-toggle="collapse" data-target="#fcs4"  aria-expanded="true" style="margin-top: 40px;">FCS Year 4&nbsp;&nbsp;<div class="expand_caret caret"></div></h3>          
              <studenttable 
                  class="test-paper"
                  :users="students.fcs.year4"
                  :block="block"
                  :putAdmin="putAdmin"
                  :setUpdate="setUpdate"
                  :isTeacher="false"
                  
              ></studenttable>
          </div>
          <div class="collapse in" id="fcs5" v-if="students.fcs.year5[0]">
            <h3 class="bold  color-black collapse in" data-toggle="collapse" data-target="#fcs5"  aria-expanded="true" style="margin-top: 40px;">FCS Year 5&nbsp;&nbsp;<div class="expand_caret caret"></div></h3>          
              <studenttable 
                  class="test-paper"
                  :users="students.fcs.year5"
                  :block="block"
                  :putAdmin="putAdmin"
                  :setUpdate="setUpdate"
                  :isTeacher="false"
                  
              ></studenttable>
          </div>
        </div>
      </div>
      <!-- end FCS -->

      <div class="fade modal" id = "updatemodal" role="dialog">
        <updatemodal
          :update = "update"
          :user = "student"
          :cleanModal = "clean"
          :error="error"
        ></updatemodal>
      </div>
 
  </div>
</template>

<script>
import updatemodal from "../../../modals/User";
import studenttable from "../UserTable.vue";

export default {
  data: function() {
    return {
      student: {
        name: "",
        phone: "",
        password: "",
        option: "",
        matricule: "",
        year: ""
      },
      actualUser: {},
      error: ""
    };
  },
  methods: {
    clean: function() {
      this.student = {};
    },
    deleteUser: function(user) {
      axios
        .delete("api/user/" + user.id)
        .then(res => {
          var option, year;
          // get student  option
          if (user.option) option = "ict";
          else option = "fcs";
          // get student  option
          if (user.year === 1) year = "year1";
          else if (user.year === 2) year = "year2";
          else if (user.year === 3) year = "year3";
          else if (user.year === 4) year = "year4";
          else year = "year5";
          this.students[option][year].forEach(stu => {
            if (stu.id === user.id) {
              var index = this.students[option][year]
                .map(function(stu) {
                  return stu;
                })
                .indexOf(stu);
              this.students[option][year].splice(index, 1);
            }
          });
        })
        .catch(error => console.log(error));
    },
    block: function(stud) {
      axios
        .get("api/user/block/" + stud.id)
        .then(res => {
          var option, year;
          // get student  option
          if (stud.option) option = "ict";
          else option = "fcs";
          // get student  option
          if (stud.year === 1) year = "year1";
          else if (stud.year === 2) year = "year2";
          else if (stud.year === 3) year = "year3";
          else if (stud.year === 4) year = "year4";
          else year = "year5";
          this.students[option][year].forEach(stu => {
            if (stu.id === stud.id) {
              var index = this.students[option][year]
                .map(function(stu) {
                  return stu;
                })
                .indexOf(stu);
              this.students[option][year][index].isAllowed = !this.students[
                option
              ][year][index].isAllowed;
            }
          });
        })
        .catch(error => console.log(error));
    },
    update: function(id) {
      if (
        $("#user-form")
          .parsley()
          .isValid()
      ) {
        let params = Object.assign({}, this.student);
        axios
          .patch("api/user", params)
          .then(res => {
            if (res.data.error) {
              this.error = res.data.error;
            } else {
              this.error = "";
              let stud = res.data;
              $("#updatemodal").modal("hide");
              var option, year;
              // delete previous user
              console.log(this.actualUser);
              if (this.actualUser.option) option = "ict";
              else option = "fcs";
              year = "year" + this.actualUser.year;
              this.students[option][year].forEach(temp => {
                if (temp.id === this.actualUser.id) {
                  var index = this.students[option][year]
                    .map(function(temp) {
                      return temp;
                    })
                    .indexOf(temp);
                  this.students[option][year].splice(index, 1);
                }
              });

              // addd new student info
              if (stud.option) option = "ict";
              else option = "fcs";
              // get student  option
              year = "year" + stud.year;
              if (stud.sex) stud.sex = "F";
              else stud.sex = "M";

              this.students[option][year].push(stud);
              this.students[option][year].sort(
                (a, b) => (a.matricule > b.matricule ? 1 : -1)
              );
            }
          })
          .catch(error => {
            console.log("an error ocurred" + error);
          });
      }
    },
    setUpdate: function(student) {
      this.student = student;
      this.actualUser = Object.assign({}, student);
    },
    putAdmin: function(stud) {
      axios
        .get("api/user/put_admin/" + stud.id)
        .then(res => {
          var option, year;
          // get student  option
          if (stud.option) option = "ict";
          else option = "fcs";
          // get student  option
          if (stud.year === 1) year = "year1";
          else if (stud.year === 2) year = "year2";
          else if (stud.year === 3) year = "year3";
          else if (stud.year === 4) year = "year4";
          else year = "year5";
          this.students[option][year].forEach(stu => {
            if (stu.id === stud.id) {
              var index = this.students[option][year]
                .map(function(stu) {
                  return stu;
                })
                .indexOf(stu);
              this.students[option][year][index].isAdmin = !this.students[
                option
              ][year][index].isAdmin;
            }
          });
        })
        .catch(error => console.log(error));
    }
  },

  components: {
    studenttable,
    updatemodal
  },

  props: ["students"]
};
</script>
