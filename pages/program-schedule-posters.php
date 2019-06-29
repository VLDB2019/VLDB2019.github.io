<section class="program-schedule-posters">
    <h1>VLDB 2019: Posters of VLDB Journal Papers</h1>

    <p>
        <a class="accepted-title" href="https://doi.org/10.1007/s00778-018-0521-x"><strong>Accelerating Pairwise SimRank Estimation over Static and Dynamic Graphs</strong></a>
        <span class="accepted-authors">
            <a href="mailto:" data-uz="ywangby" data-at="connect.ust.hk">Yue Wang</a> (Hong Kong University of Science and Technology),
            <span class="author">Lei Chen</span> (Hong Kong University of Science and Technology),
            <span class="author">Yulin Che</span> (Hong Kong University of Science and Technology), and
            <span class="author">Qiong Luo</span> (Hong Kong University of Science and Technology)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Measuring similarities among different vertices is a fundamental problem in graph analysis. Among different similarity measurements, SimRank is one of the most promising and popular ones. In reality, instead of computing the whole similarity matrix, people often issue SimRank queries in a pairwise manner, each of which needs to estimate an approximate SimRank value within a specified accuracy for a given pair of nodes. These pairwise SimRank queries are often processed on real-life graphs, which typically evolve over time, requiring efficient algorithms that can query pairwise SimRank under dynamic graph updates. However, current single-pair SimRank solutions are either static or inefficient in handling dynamic cases with good result quality. Observing that the sample size is the major factor that determines the efficiency and the accuracy in Monte Carlo methods to estimate pairwise SimRank, in this paper, we propose three algorithms to query pairwise SimRank over static and dynamic graphs efficiently, by using different sample reduction strategies. The accuracy of our algorithms is guaranteed by the different invariants we proposed for pairwise SimRank. We show that our algorithms outperform the state-of-the-art static and dynamic solutions for pairwise SimRank estimation.
        </span>
    </p>

    <p>
        <a class="accepted-title" href="https://doi.org/10.1007/s00778-018-0530-9"><strong>Building Self-Clustering RDF Databases Using Tunable-LSH</strong></a>
        <span class="accepted-authors">
            <a href="mailto:" data-uz="alucgunes" data-at="gmail.com">Güneş Aluç</a> (SAP SE),
            <span class="author">M. Tamer Özsu</span> (University of Waterloo), and
            <span class="author">Khuzaima Daudjee</span> (University of Waterloo)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            The Resource Description Framework (RDF) is a W3C standard for representing graph-structured data, and SPARQL is the standard query language for RDF. Recent advances in information extraction, linked data management and the Semantic Web have led to a rapid increase in both the volume and the variety of RDF data that are publicly available. As businesses start to capitalize on RDF data, RDF data management systems are being exposed to workloads that are far more diverse and dynamic than what they were designed to handle. Consequently, there is a growing need for developing workload-adaptive and self-tuning RDF data management systems. To realize this objective, we introduce a fast and efficient method for dynamically clustering records in an RDF data management system. Specifically, we assume nothing about the workload upfront, but as SPARQL queries are executed, we keep track of records that are co-accessed by the queries in the workload and physically cluster them. To decide dynamically and in constant-time where a record needs to be placed in the storage system, we develop a new locality-sensitive hashing (LSH) scheme, Tunable-LSH. Using Tunable-LSH, records that are co-accessed across similar sets of queries can be hashed to the same or nearby physical pages in the storage system. What sets Tunable-LSH apart from existing LSH schemes is that it can auto-tune to achieve the aforementioned clustering objective with high accuracy even when the workloads change. Experimental evaluation of Tunable-LSH in an RDF data management system as well as in a standalone hashtable shows end-to-end performance gains over existing solutions.
        </span>
    </p>

    <p>
        <a class="accepted-title" href="https://doi.org/10.1007/s00778-018-0500-2"><strong>Scaling Distributed Transaction Processing and Recovery based on Dependency Logging</strong></a>
        <span class="accepted-authors">
            <span class="author">Chang Yao</span> (National University of Singapore),
            <a href="mailto:" data-uz="meihui_zhang" data-at="bit.edu.cn">Meihui Zhang</a> (Beijing University of Technology),
            <span class="author">Qian Lin</span> (National University of Singapore),
            <span class="author">Beng Chin Ooi</span> (National University of Singapore), and
            <span class="author">Jiatao Xu</span> (Tencent Inc.)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Dependency Graph based Concurrency Control (DGCC) protocol has been shown to achieve good performance on multi-core in-memory system. DGCC separates contention resolution from the transaction execution and employs dependency graphs to derive serializable transaction schedules. However, distributed transactions complicate the dependency resolution, and therefore, an effective transaction partitioning strategy is essential to reduce expensive multi-node distributed transactions. During failure recovery, log must be examined from the last checkpoint onwards and the affected transactions are re-executed based on the way they are partitioned and executed. Existing approaches treat both transaction management and recovery as two separate problems, even though recovery is dependent on the sequence in which transactions are executed. In this paper, we propose to treat the transaction management and recovery problems as one. We first propose an efficient Distributed Dependency Graph based Concurrency Control ( DistDGCC) protocol for handling transactions spanning multiple nodes, and propose a new novel and efficient logging protocol called Dependency Logging that also makes use of dependency graphs for efficient logging and recovery. DistDGCC optimizes the average cost for each distributed transaction by processing transactions in batches. Moreover, it also reduces the effects of thread blocking caused by distributed transactions and consequently improves the runtime performance. Further, dependency logging exploits the same data structure that is used by DistDGCC to reduce the logging overhead, as well as the logical dependency information to improve the recovery parallelism. Extensive experiments are conducted to evaluate the performance of our proposed technique against state-of-the-art techniques. Experimental results show that DistDGCC is efficient and scalable, and dependency logging supports fast recovery with marginal runtime overhead. Hence, the overall system performance is significantly improved as a result.
        </span>
    </p>

    <p>
        <a class="accepted-title" href="https://doi.org/10.1007/s00778-018-0525-6"><strong>A Framework for Efficient Multi-Attribute Movement Data Analysis</strong></a>
        <span class="accepted-authors">
            <a href="mailto:" data-uz="fabio.valdes" data-at="fernuni-hagen.de">Fabio Valdés</a> (FernUniversitat in Hagen) and
            <span class="author">Ralf Hartmut Güting</span> (FernUniversitat in Hagen)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            In the first two decades of this century, the amount of movement and movement-related data has increased massively, predominantly due to the proliferation of positioning features in ubiquitous devices such as cellphones and automobiles. At the same time, there is a vast number of requirements for managing and analyzing these records for economic, administrative, and private purposes. Since the growth of data quantity outpaces the efficiency development of hardware components, it is necessary to explore innovative methods of extracting information from large sets of movement data. Hence, the management and analysis of such data, also called trajectories, have become a very active research field. In this context, the time-dependent geographic position is only one of arbitrarily many recorded attributes. For several applications processing trajectory (and related) data, it is helpful or even necessary to trace or generate additional time-dependent information, according to the purpose of the evaluation. For example, in the field of aircraft traffic analysis, besides the position of the monitored airplane, also its altitude, the remaining amount of fuel, the temperature, the name of the traversed country and many other parameters that change with time are relevant. Other application domains consider the names of streets, places of interest, or transportation modes which can be recorded during the movement of a person or another entity. In this paper, we present in detail a framework for analyzing large datasets having any number of time-dependent attributes of different types with the help of a pattern language based on regular expression structures. The corresponding matching algorithm uses a collection of different indexes and is divided into a filtering and an exact matching phase. Compared to the previous version of the framework, we have extended the flexibility and expressiveness of the language by changing its semantics. Due to storage adjustments concerning the applied index structures and further optimizations, the efficiency of the matching procedure has been significantly improved. In addition, the user is no longer required to have a deep knowledge of the temporal distribution of the available attributes of the dataset. The expressiveness and efficiency of the novel approach are demonstrated by querying real and synthetic datasets. Our approach has been fully implemented in a DBMS querying environment and is freely available open source software.
        </span>
    </p>

    <p>
        <a class="accepted-title" href="https://doi.org/10.1007/s00778-018-0524-7"><strong>Real-time Context-aware Social Media Recommendation</strong></a>
        <span class="accepted-authors">
            <a href="mailto:" data-uz="xiangmin.zhou" data-at="rmit.edu.au">Xiangmin Zhou</a> (RMIT University),
            <span class="author">Dong Qin</span> (RMIT University),
            <span class="author">Lei Chen</span> (Hong Kong University of Science and Technology), and
            <span class="author">Yanchun Zhang</span> (Victoria University)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Social media recommendation has attracted great attention due to its wide applications in online advertisement and entertainment etc. Since contexts highly affect social user preferences, great effort has been put into context-aware recommendation in recent years. However, existing techniques cannot capture the optimal context information that is most discriminative and compact from a large number of available features flexibly for effective and efficient context-aware social recommendation. To address this issue, we propose a generic framework for context-aware recommendation in shared communities, which exploits the characteristics of media content and contexts. Specifically, we first propose a novel approach based on the correlation between a feature and a group of other ones for selecting the optimal features used in recommendation, which fully removes the redundancy. Then, we propose a graph-based model called content-context interaction graph (CCIG), by analysing the metadata content and social contexts, and the interaction between attributes. Finally, we design hash-based index over Apache Storm for organizing and searching the media database in real time. Extensive experiments have been conducted over large real media collections to prove the high effectiveness and efficiency of our proposed framework.
        </span>
    </p>

    <p>
        <a class="accepted-title" href="https://doi.org/10.1007/s00778-018-0514-9"><strong>A Survey of State Management in Big Data Processing Systems</strong></a>
        <span class="accepted-authors">
            <a href="mailto:" data-uz="quoc_cuong.to" data-at="dfki.de">Quoc-Cuong To</a> (German Research Center for Artificial Intelligence),
            <span class="author">Juan Soto</span> (DFKI & TU Berlin), and
            <span class="author">Volker Markl</span> (DFKI & TU Berlin)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            The concept of state and its applications vary widely across big data processing systems. This is evident in both the research literature and existing systems, such as Apache Flink, Apache Heron, Apache Samza, Apache Spark, and Apache Storm. Given the pivotal role that state management plays, particularly, for iterative batch and stream processing, in this survey, we present examples of state as an enabler, discuss the alternative approaches used to handle and implement state, capture the many facets of state management, and highlight new research directions. Our aim is to provide insight into disparate state management techniques, motivate others to pursue research in this area, and draw attention to open problems.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Event Modeling and Mining: A Long Journey Towards Explainable Events</strong>
        <span class="accepted-authors">
            <a href="mailto:" data-uz="xinhchen2-c" data-at="my.cityu.edu.hk">Xinhong Chen</a> (City University of Hong Kong) and
            <span class="author">Qing Li</span> (Hong Kong Polytechnic University)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Recently, research on event management has redrawn much attention and made great progress. As the core tasks of event management, event modeling and mining are essential for accessing and utilizing events effectively. In this survey, we provide a detailed review of event modeling and event mining. Based on a general definition, different characteristics of events are described, along with the associated challenges. Then, we define four forms of events in order to better classify currently available but somewhat confusing event types; we also compare different event representation and relationship analysis techniques used for different forms of events. Finally, we discuss several pending issues and application-specific challenges which also shed light on future research directions
        </span>
    </p>

    <p>
        <strong class="accepted-title">Comparing heuristics for graph edit distance computation</strong>
        <span class="accepted-authors">
            <a href="mailto:" data-uz="david.b.blumenthal" data-at="gmail.com">David B. Blumenthal</a> (Free University of Bozen-Bolzano),
            <span class="author">Nicolas Boria</span> (Normandie Université),
            <span class="author">Johann Gamper</span> (Free University of Bozen-Bolzano),
            <span class="author">Sébastien Bougleux</span> (Normandie Université), and
            <span class="author">Luc Brun</span> (Normandie Université)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Because of its flexibility, intuitiveness, and expressivity, the graph edit distance (GED) is one of the most widely used distance measures for labeled graphs. Since exactly computing GED is NP-hard, over the past years, various heuristics have been proposed. They use techniques such as transformations to the linear sum assignment problem with error-correction, local search, and linear programming to approximate GED via upper or lower bounds. In this paper, we provide a systematic overview of the most important heuristics. Moreover, we empirically evaluate all compared heuristics within an integrated implementation.
        </span>
    </p>

    <p>
        <a class="accepted-title" href="https://doi.org/10.1007/s00778-018-0517-6"><strong>VBTree - Forward Secure Conjunctive Queries over Encrypted Data for Cloud Computing</strong></a>
        <span class="accepted-authors">
            <a href="mailto:" data-uz="cxiaodiao" data-at="hnu.edu.cn">Zhiqiang Wu</a> (Hunan University) and
            <span class="author">Kenli Li</span> (Hunan University)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            This paper concerns the fundamental problem of processing conjunctive keyword queries over an outsourced data table on untrusted public clouds in a privacy-preserving manner. The data table can be properly implemented with tree-based Searchable Symmetric Encryption (SSE) schemes, such as the known Keyword Red-Black tree (KRB) and the Indistinguishable Bloom-filter Tree (IBTree) in ICDE '17. However, as for these trees, there still exist many limitations to support sub-linear time updates. One of the reasons is that their tree branches are directly exposed to the cloud. To achieve efficient conjunctive queries while supporting dynamic updates, we introduce a novel tree data structure called virtual binary tree (VBTree). Our key design is to organize indexing elements into the VBTree in a top-down fashion, without storing any tree branches and tree nodes. The tree only exists in a logical view, and all of the elements are actually stored in a hash table. To achieve forward privacy, which is discussed by Bost in CCS '16, we also propose a storage mechanism called version control repository (VCR), to record and control versions of keywords and queries. VCR has a smaller client-side storage compared to other forward-private schemes. With our proposed approach, data elements can be quickly searched while the index can be privately updated. The security of the VBTree is formally proved under the IND-CKA2 model. We test our scheme on a real email dataset and a user location dataset. The testing results demonstrate its high efficiency and scalability in both searching and updating processes
        </span>
    </p>

    <p>
        <a class="accepted-title" href="https://doi.org/10.1007/s00778-018-0531-8"><strong>Cascade-Aware Partitioning of Large Graph Databases</strong></a>
        <span class="accepted-authors">
            <span class="author">Gunduz Vehbi Demirci</span> (Bilkent Üniversitesi),
            <a href="mailto:" data-uz="hakan.f" data-at="warwick.ac.uk">Hakan Ferhatosmanoglu</a> (University of Warwick), and
            <span class="author">Cevdet Aykanat</span> (Bilkent Universitesi)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Graph partitioning is an essential task for scalable data management and analysis. The current partitioning methods utilize the structure of the graph, and the query log if available. Some queries performed on the database may trigger further operations. For example, the query workload of a social network application may contain re-sharing operations in the form of cascades. It is beneficial to include the potential cascades in the graph partitioning objectives. In this paper, we introduce the problem of cascade-aware graph partitioning that aims to minimize the overall cost of communication among parts/servers during cascade processes. We develop a randomized solution that estimates the underlying cascades, and use it as an input for partitioning of large scale graphs. Experiments on 17 real social networks demonstrate the effectiveness of the proposed solution in terms of the partitioning objectives.
        </span>
    </p>

    <p>
        <a class="accepted-title" href="https://doi.org/10.1007/s00778-018-0528-3"><strong>Summarizing Semantic Graphs: A Survey</strong></a>
        <span class="accepted-authors">
            <span class="author">Šejla Čebirić</span> (Inria and LIX),
            <span class="author">François Goasdoué</span> (Univ Rennes, Inria, CNRS, IRISA),
            <a href="mailto:" data-uz="kondylak" data-at="ics.forth.gr">Haridimos Kondylakis</a> (FORTH-ICS),
            <span class="author">Dimitris Kotzinos</span> (University of Paris-Seine, University of Cergy-Pontoise, ENSEA, CNRS),
            <span class="author">Ioana Manolescu</span> (Inria and Lix),
            <span class="author">Georgia Troullinou</span> (FORTH-ICS), and
            <span class="author">Mussab Zneika</span> (University of Paris-Seine, Univerisity of Cergy-Pontoise, ENSEA, CNRS)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            The explosion in the amount of the available RDF data has lead to the need to explore, query and understand such data sources. Due to the complex structure of RDF graphs and their heterogeneity, the exploration and understanding tasks are significantly harder than in relational databases, where the schema can serve as a first step toward understanding the structure. Summarization has been applied to RDF data to facilitate these tasks. Its purpose is to extract concise and meaningful information from RDF knowledge bases, representing their content as faithfully as possible. There is no single concept of RDF summary, and not a single but many approaches to build such summaries; each is better suited for some uses, and each presents specific challenges with respect to its construction. This survey is the first to provide a comprehensive survey of summarization method for semantic RDF graphs. We propose a classification taxonomy of existing works in this area, including also some very close works developed prior to the adoption of RDF in the data management community; we present the concepts at the core of each approach and outline their main technical aspects and implementation. We hope the survey will help readers understand this scientifically rich area, and identify the most pertinent summarization method for a variety of usage scenarios.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Location Prediction in Large-Scale Social Networks: An In-depth Benchmarking Study</strong>
        <span class="accepted-authors">
            <span class="author">Nur Al Hasan Haldar</span> (The University of Western Australia),
            <a href="mailto:" data-uz="jianxin.li" data-at="uwa.edu.au">Jianxin Li</a> (The University of Western Australia),
            <span class="author">Mark Reynolds</span> (The University of Western Australia),
            <span class="author">Timos Sellis</span> (Swinburne University of Technology), and
            <span class="author">Jeffrey Xu Yu</span> (Chinese University of Hong Kong)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Location details of social users are important in diverse applications ranging from news recommendation systems to disaster management. However, user location is not easy to obtain from social networks because many users do not bother to provide this information or decline to do so due to privacy concerns. Thus, it is useful to estimate user locations from implicit information in the network. For this purpose, many location prediction models have been proposed that exploit different network features. Unfortunately, these models have not been benchmarked on common datasets using standard metrics. We fill this gap and provide an in-depth empirical comparison of eight representative prediction models using five metrics on four real-world large-scale datasets namely, Twitter, Gowalla, Brightkite, and Foursquare. We formulate a generalized procedure-oriented location prediction framework which allows us to evaluate and compare the prediction models systematically and thoroughly under extensive experimental settings. Based on our results, we perform an in-depth analysis of the merits and limitations of the models providing significant insights into the location prediction problem.
        </span>
    </p>

    <p>
        <strong class="accepted-title">A Survey of Community Search Over Big Graphs</strong>
        <span class="accepted-authors">
            <a href="mailto:" data-uz="yixiang.fang" data-at="unsw.edu.au">Yixiang Fang</a> (University of New South Wales),
            <span class="author">Xin Huang</span> (Hong Kong Baptist University),
            <span class="author">Lu Qin</span> (University of Technology Sydney),
            <span class="author">Ying Zhang</span> (University of Technology Sydney),
            <span class="author">Wenjie Zhang</span> (University of New South Wales),
            <span class="author">Reynold Cheng</span> (University of Hong Kong), and
            <span class="author">Xuemin Lin</span> (University of New South Wales)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            With the rapid development of information technologies, various big graphs are prevalent in many real applications (e.g., social media and knowledge bases). An important component of these graphs is the network community. Essentially, a community is a group of vertices which are densely connected internally. Community retrieval can be used in many real applications, such as event organization, friend recommendation, and so on. Consequently, how to efficiently and high quality communities from big graphs is an important research topic in the era of big data. Recently a large group of research works, called community search, have been proposed. They aim to provide efficient solutions for searching high-quality communities from large networks in real-time. Nevertheless, these works focus on different types of graphs and formulate communities in different manners, and thus it is desirable to have a comprehensive review of these works. In this survey, we conduct a thorough review of existing community search works. Moreover, we analyze and compare the quality of communities under their models, and the performance of different solutions. Furthermore, we point out new research directions. This survey does not only help researchers to have better understanding of existing community search solutions, but also provides practitioners a better judgement on choosing the proper solutions.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Microblogs Data Management: A Survey</strong>
        <span class="accepted-authors">
            <a href="mailto:" data-uz="amr" data-at="cs.ucr.edu">Amr Magdy</a> (University of California Riverside),
            <span class="author">Laila Abdelhafeez</span> (University of California, Riverside),
            <span class="author">Yunfan Kang</span> (University of California Riverside),
            <span class="author">Eric Ong</span> (University of California Riverside), and
            <span class="author">Mohamed Mokbel</span> (University of Minnesota)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Microblogs data is the micro-length user-generated data that is posted on the web, e.g., tweets, online reviews, comments on news and social media. It has gained considerable attention in recent years due to its widespread popularity, rich content, and value in several societal applications. Nowadays, microblogs applications span a wide spectrum of interests including targeted advertising, market reports, news delivery, political campaigns, rescue services, and public health. Consequently, major research efforts have been spent to manage, analyze, and visualize microblogs to support different applications. This paper gives a comprehensive review of major research and system work in microblogs data management. The paper reviews core components that enable large-scale querying and indexing for microblogs data. A dedicated part gives particular focus for discussing system-level issues and on-going effort on supporting microblogs through the rising wave of big data systems. In addition, we review the major research topics that exploit these core data management components to provide innovative and effective analysis and visualization for microblogs, such as event detection, recommendations, automatic geotagging, and user queries. Throughout the different parts, we highlight the challenges, innovations, and future opportunities in microblogs data research.
        </span>
    </p>
</section>
<?php
define('PageTitle', "Program Schedule - Posters of VLDB Journal Papers");
define('PageDescription', "List of posters from VLDB Journal Papers.");
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebPage",
  "name": "Program Schedule - Posters of VLDB Journal Papers",
  "url": "https://vldb.org/2019/?program-schedule-posters",
  "description": "List of Posters from VLDB Journal Papers.",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "https://vldb.org/",
        "name": "VLDB"
      }
    },{
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "https://vldb.org/conference.html",
        "name": "Conferences"
      }
    },{
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "https://vldb.org/2019/",
        "name": "2019"
      }
    },{
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@id": "https://vldb.org/2019/?program",
        "name": "Conference Program"
      }
    },{
      "@type": "ListItem",
      "position": 5,
      "item": {
        "@id": "https://vldb.org/2019/?program-schedule-posters",
        "name": "Posters of VLDB Journal Papers"
      }
    }]
  }
}


</script>