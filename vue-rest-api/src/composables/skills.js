import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'
axios.defaults.baseURL = "http://127.0.0.1:8001/api/v1/"

export default function useSkills() {


    const skills = ref([]);
    const skill = ref({});
    const errors = ref({});
    const router = useRouter()
    
    const getSkills = async () => {
        try {
            const response = await axios.get("skills")
            skills.value = response.data.data
        } catch (error) {
            console.error(error)
        }
    }

    const getSkill = async (id) => {
        try {
            const response = await axios.get("skills/" + id)
            skill.value = response.data.data
        }
        catch (error) {
            console.error(error)
        }
    }

    
    const storeSkill = async (data) => {
        try {
            await axios.post("skills", data)
            await router.push({ name: 'SkillIndex' })
       }
       catch (error) {
           if (error.response.status === 422) {
               errors.value = error.response.data.errors
           }
       }
        
    }
    
    const updateSkill = async (id) => {
        try {
            await axios.put("skills/"+id, skill.value);
            await router.push({ name: 'SkillIndex' })
        } catch (error) {
            if (error.response.status === 422) {
                errors.value = error.response.data.errors
            }
        }
    }
    
    const destroySkill = async (id) => {
            if (!window.confirm("Are you sure you want to delete this skill?")) {
                return;
            }
            try {
                await axios.delete("skills/" + id);
                await getSkills();
            } catch (error) {
                console.error(error);
            }
       
    }
    
    return { skill, skills, getSkills, getSkill, storeSkill, updateSkill, destroySkill,errors }
}
