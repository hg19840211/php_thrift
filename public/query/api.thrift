namespace csharp FW.Query

service Api {
    string search(1: string param);
  //  string tag(1: string param);
    string erupt(1:list<string> param);
  //  string search_compress(1: string param);
  //  string erupt_compress(1:list<string> param);
    string flow(1:list<string> param);
  //  string flow_compress(1:list<string> param);
}
